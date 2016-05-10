
$.fn.wrapEvery = function(cLen, wrapperEl){while (this.length ){$( this.splice(0, cLen) ).wrapAll( wrapperEl );}};	