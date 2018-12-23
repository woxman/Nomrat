//  تابع محاسبه زمان ایران بر اساس زمان یونیکسی
function getIranClock(){
    var dt=new Date(1E3*uts+3.5*36E5), h=dt.getUTCHours(),
        m=dt.getUTCMinutes(),s=dt.getUTCSeconds();
    return h+":"+((10>m?"0":"")+m)+":"+((10>s?"0":"")+s);
};

//  تابع مربوط به آپدیت زمان
function updateClock(){
    uts++;
    document .getElementById("time") .innerHTML = getIranClock();
}

setInterval(updateClock, 1000);
