jQuery(document.links)   .filter(function() {     return this.hostname != window.location.hostname;   })     .attr('target', '_blank');  

 $(window).load(function(){        
   $('#myModal').modal({backdrop: true});
    }); 