    window.setInterval('zopim()', 2000);
    window.setInterval('exibe()', 2000);

     function zopim() {
         $zopim(function() {
                 $zopim.livechat.departments.setVisitorDepartment('Fly01 Manufatura');
             });
     }

     function exibe() {
        console.log(prechat_inputs);
     }