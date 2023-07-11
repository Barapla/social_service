function animateValue(elementId, start, end, duration, suffix, prefix = '') {
    let current = start;
    const increment = (end - start) / (duration / 10);
    let iteration = 0;
  
    const timer = setInterval(() => {
      current += increment;
      iteration++;
      document.getElementById(elementId).textContent = prefix+Math.floor(current).toLocaleString()+ suffix;
  
      if (iteration >= duration / 10) {
        clearInterval(timer);
        document.getElementById(elementId).textContent = prefix+Math.floor(end).toLocaleString()+ suffix;
      }
    }, 10);
  }
  
  function checkScrollPosition() {
    const section = document.getElementById('trigger-section');
    const sectionTop = section.getBoundingClientRect().top;
    const sectionHeight = section.offsetHeight;
    const scrollTop = window.pageYOffset;
    const windowHeight = window.innerHeight;
  
    if (scrollTop > sectionTop + sectionHeight - windowHeight) {
        console.log("triggered");
      animateValue('stats-clients', 0, 68, 2000,'k+');
      animateValue('stats-projects', 0, 90, 2000,'k+');
      animateValue('stats-revenue', 0, 80, 2000,'M', '$');
      animateValue('stats-success', 0, 99, 2000,'%');
      // Remove the event listener once the animation is triggered
      window.removeEventListener('scroll', checkScrollPosition);
    }
  }
  
  function addScrollListener() {
    // Add the scroll event listener
    window.addEventListener('scroll', checkScrollPosition);
  }
  
  // Add the initial scroll event listener
  addScrollListener();
  