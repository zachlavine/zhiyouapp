/*
 * [preImgLoad 图片预加载函数]
 * @param  {[type]}   imgList  [需要加载的图片路径数组]
 * @param  {[type]}   infoEle  [显示结果的标签]
 * @param  {Function} callback [图片全部加载完毕回调函数]
 * @return {[type]} \           [无返回值]
 * @demo
 * preImgLoad(loadImgArr, view, function() {
 *   alert("加载完毕");
 * }).load();
 * @author HTML5学堂
 */
var preImgLoad = function(imgList, infoEle, callback) {
    var imgCount    = 0,
        lsPt        = 90,
        imgAll      = imgList.length,
        percent     = "0%";

    // 图片加载函数
    function load() {
        var len = imgList.length;
        for(var i = 0; i < len; i++) {
            var img = new Image();
            img.src = imgList[i];
            // 如果缓存中已经有当前图片，直接调用回调函数
            if(img.complete) {
                loadImgCount();
            } else {
                img.onload = function() {
                    // 当IE6/7加载gif图片的时候，onload事件一直执行
                    if (imgCount < imgAll) {
                        loadImgCount();
                    };
                }
                // 如果下载发生错误则报错
                img.onerror = function() {
                }
            }
        }

    }
    var timer = null;
    // 图片加载统计张数
    function loadImgCount() {
        imgCount++;
        percent = Math.floor(imgCount * 100 / imgAll);
        if(percent < 98) {
            infoEle.innerHTML = percent + '%';
        }
        if (imgCount == imgAll) {
            // setTimeout(callback, 2000);
            setTimeout(function() {
               timer = setInterval(function() {
                    lastPercent (callback);
               }, 200)
                // callback();
            }, 4000);
        };
    }
    return {
        load: load
    }

    //添加加载最后10%的效果
    function lastPercent (callback) {
        lsPt++;
        if(lsPt <= 100) {
           infoEle.innerHTML = lsPt + '%'; 
        } else {
            clearInterval(timer);
            callback();
        }
    }
}
