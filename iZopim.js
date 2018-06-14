    function intervalar(dep) {
        window.setInterval('zopim(dep)', 2000);
    }
    
     function zopim(departamento) {
         $zopim(function() {
                 $zopim.livechat.departments.setVisitorDepartment(departamento);
             });
     }
