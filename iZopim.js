var dep = "";

function setDep(depart) {
  dep = depart;
}

function getDep() {
  return dep;
}

function intervalar() {
    window.setInterval('zopim()', 2000);
  }
  
  function zopim() {
     $zopim(function() {
             $zopim.livechat.departments.setVisitorDepartment(getDep());
         });
  }
  