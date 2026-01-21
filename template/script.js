(function(){
  document.addEventListener('DOMContentLoaded', function(){
    var toggle = document.querySelector('[data-widget="pushmenu"]');
    if(!toggle) return;
    toggle.addEventListener('click', function(e){
      e.preventDefault();

      if(window.innerWidth <= 768){
        document.body.classList.toggle('sidebar-open');
      } else {
        document.body.classList.toggle('sidebar-collapsed');
      }
    });
  });
})();
