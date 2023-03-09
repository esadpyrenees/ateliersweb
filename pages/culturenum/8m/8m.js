var urls = ["ANTIFA-INFRA.svg",
"BOLT.svg",
"CLOUD-NO-THANKS.svg",
"sticker_WhatCloudGoWrong_96dpi.png",
"agile.gif",
"almost.gif",
"antifa.gif",
"cloudabolition.gif",
"cloudsoption.gif",
"counter.png",
"countercloud.png",
"dancepicket.gif",
"depletion.gif",
"elastic.gif",
"feral.gif",
"imagination-slipping-into-ever-12-2-2022.png",
"IN-THE-RUINS-OF-BIG-TECH-12-1-2022.png",
"less.gif",
"queeringoperations.gif",
"radicals.png",
"regeneration.png",
"ruins.png",
"scale.png",
"showmethebudget.png",
"slipping.png",
"strike.png",
"take.gif",
"tech.gif",
"wicked.png",
"counter_cloud_action.svg"];

var sticker = document.querySelector('#sticker');

setInterval(() => {
  sticker.src = urls[Math.floor( Math.random() * urls.length) ]
}, 5000);


