const intrinsic = document.querySelector(".intrinsic");
const intrinsics = intrinsic.querySelectorAll('p');
intrinsic.addEventListener('resize', () => {
  
})




const resizeObserver = new ResizeObserver((entries) => {
  for (const entry of entries) {
    intrinsics.forEach(i => {
      const w = Math.round(i.getBoundingClientRect().width);
      i.dataset.width =  w;
    });
  }

  console.log("Size changed");
});

resizeObserver.observe(intrinsic);
