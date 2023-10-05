// https://developer.mozilla.org/fr/docs/Web/API/Web_Storage_API/Using_the_Web_Storage_API
function storageAvailable(type) {
  try {
    var storage = window[type],
      x = "__storage_test__";
    storage.setItem(x, x);
    storage.removeItem(x);
    return true;
  } catch (e) {
    return (e instanceof DOMException && (e.code === 22 || e.code === 1014 || e.name === "QuotaExceededError" || e.name === "NS_ERROR_DOM_QUOTA_REACHED") && storage.length !== 0);
  }
}
// https://www.sohamkamani.com/javascript/localstorage-with-ttl-expiry/
function setWithExpiry(key, value, ttl) {
	const now = new Date();
	const item = {
		value: value,
		expiry: now.getTime() + ttl,
	}
	localStorage.setItem(key, JSON.stringify(item))
}

if (storageAvailable("localStorage")) {
  const info = document.querySelector("#examples-info");
  const closeinfo = info.querySelector("button");
	const hideExamples = localStorage.getItem("hideExamplesInfo")	
	if (!hideExamples) {
		closeinfo.addEventListener("click", () => {
      info.style.display = "none";
      localStorage.setItem("hideExamplesInfo", true);
      setWithExpiry("hideExamplesInfo", true, 1000 * 60 * 24 * 31);
    });
	} else {
    info.style.display = "none";
    const item = JSON.parse(hideExamples);
    const now = new Date();
    if (now.getTime() > item.expiry) {
      localStorage.removeItem("hideExamplesInfo")
    }
  }  
} 




var targetSelector = ".exemple";
function getSelectorFromHash() {
  var hash = window.location.hash.replace(/^#/g, "");
  var selector = hash ? "." + hash : targetSelector;
  return selector;
}

function setHash(state) {
  var selector = state.activeFilter.selector;
  var newHash = "#" + selector.replace(/^\./g, "");
  if (selector === targetSelector && window.location.hash) {
    // console.log("ici");
    history.pushState(null, document.title, window.location.pathname); // or history.replaceState()
  } else if (newHash !== window.location.hash && selector !== targetSelector) {
    // console.log("là");
    history.pushState(null, document.title, window.location.pathname + newHash); // or history.replaceState()
  }
}

var mixer = mixitup(".grid", {
  animation: { enable: false },
  selectors: { target: targetSelector },
  load: { filter: getSelectorFromHash() }, // Ensure that the mixer's initial filter matches the URL on startup
  callbacks: { onMixEnd: setHash } // Call the setHash() method at the end of each operation 
});

window.onhashchange = function () {
  var selector = getSelectorFromHash();
  if (selector === mixer.getState().activeFilter.selector) return; // no change
  mixer.filter(selector);
};
