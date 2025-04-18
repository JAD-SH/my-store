<script>

/*################# start scrolling-links-cat ##########################*/



const scrollableDiv = document.querySelector('.links-cat .links');
const scrollLeftButton = document.querySelector('.links-cat .left');
const scrollRightButton = document.querySelector('.links-cat .right');

let scrollInterval;

function startScroll(direction) {
    const scrollAmount = direction === 'left' ? -100 : 100; // يمكنك تغيير القيمة حسب الحاجة
    scrollInterval = setInterval(() => {
        scrollableDiv.scrollBy({
            left: scrollAmount,
            behavior: 'smooth'
        });
        checkScroll(); // التحقق من حالة التمرير أثناء التمرير
    }, 100); // سرعة التمرير (كل 100 مللي ثانية)
}

function stopScroll() {
    clearInterval(scrollInterval);
}

function checkScroll() {
    // إخفاء زر التمرير لليسار إذا كان التمرير في أقصى اليسار
     if (scrollableDiv.scrollLeft === 1 || scrollableDiv.scrollLeft === 0) {
        scrollRightButton.style.display = 'none';
    } else {
        scrollRightButton.style.display = 'block';
    }
   
    if (Math.abs(scrollableDiv.scrollLeft) + scrollableDiv.clientWidth +1 >= scrollableDiv.scrollWidth) {
        scrollLeftButton.style.display = 'none';
    } else {
        scrollLeftButton.style.display = 'block';
    }
 }

scrollLeftButton.addEventListener('mousedown', () => startScroll('left'));
scrollRightButton.addEventListener('mousedown', () => startScroll('right'));

scrollLeftButton.addEventListener('mouseup', stopScroll);
scrollRightButton.addEventListener('mouseup', stopScroll);
scrollLeftButton.addEventListener('mouseleave', stopScroll); // إيقاف التمرير عند مغادرة الزر
scrollRightButton.addEventListener('mouseleave', stopScroll); // إيقاف التمرير عند مغادرة الزر

scrollableDiv.addEventListener('scroll', checkScroll);

checkScroll();



/*################# end scrolling-links-cat ##########################*/






 
</script>
<!-- 

هذا الكود من اجل زيادة الحماية يجب تفعيله عند رفع الموقع على السيرفر

<script>
  
  document.oncontextmenu = document.body.oncontextmenu = function() {return false;}

  document.onkeydown = function(e) {
        if (e.ctrlKey && 
            (e.keyCode === 67 || 
             e.keyCode === 86 || 
             e.keyCode === 83 || 
             e.keyCode === 85 || 
             e.keyCode === 117)) {
            alert('غير مسموح');
            return false;
        }
        else if (e.keyCode === 123){
            alert('غير مسموح');
            return false;
        } else if (e.ctrlKey && e.shiftKey && (e.keyCode === 73)) {
            alert('غير مسموح');
            return false;
        } else {
            return true;
        }
  };
  
</script>

-->