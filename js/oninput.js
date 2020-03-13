/* --------------------------- 2. Поиск по артикулу --------------------------- */

document.querySelector('#elastic').oninput = function() {


  var val = this.value.trim();
  var elasticItem_name = document.querySelectorAll('tbody tr .name-producte');
  var elasticItem_code = document.querySelectorAll('.tbody-tab-category-actice tr .vendor-code-producte');

  if(val != '') {
    elasticItem_code.forEach(function(elem) {
      if (elem.innerText.search(val) == -1) {
        elem.parentElement.classList.add('hidden-search');
        elem.innerHTML = elem.innerText;
      } else {
        elem.parentElement.classList.remove('hidden-search');
        var str = elem.innerText;
        elem.innerHTML = insertMark(str,elem.innerText.search(val), val.length);
      }
    });
  }  else {
    elasticItem_code.forEach(function(elem) {
        elem.parentElement.classList.remove('hidden-search');
        elem.innerHTML = elem.innerText;
      }); 
   };
};

function insertMark(string, pos, len) {
  return string.slice(0, pos)+'<mark>'+string.slice(pos, pos+len)+'</mark>'+string.slice(pos+len);
}