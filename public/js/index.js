let product =document.querySelector(".selected");
console.log(products);
let ifExist=[];



product.addEventListener("click", function(e){
    // console.log(e.target);
   let conatiner =document.querySelector(".tableBody");
   let clickedItemWraper=e.target.closest("div");
//    console.log("🚀 ~ file: index.js:5 ~ product.addEventListener ~ clickedItemWraper:", clickedItemWraper.dataset.itemId);
for(let i=0;i<products.length;i++){
    
    if(products[i].id==clickedItemWraper.dataset.itemId&&!ifExist.includes(products[i].id)){
        ifExist.push(products[i].id)
        conatiner.innerHTML+= `<tr id="row${products[i].id}">
        <th>${products[i].name}</th>
        <td>${products[i].price}</td>
        <td class="d-flex align-items-center justify-content-center">
        <span class="add btn btn-danger mx-1">+</span>
          <span class="btn btn-info mx-1">-</span>
        </td>
        <td>1</td>
        <td><input type="button" value="x" class="deleteProduct btn btn-danger" onclick="deleteProduct(this)" /></td>
      </tr>`
 
    }
}
   
 
    })



function deleteProduct(e){
    let row=e.parentElement.parentElement;
    let arrIndex=parseInt(row.id.slice(3));
    console.log(ifExist.indexOf(arrIndex));
    ifExist.splice(ifExist.indexOf(arrIndex),1);
    row.remove();
    console.log(arrIndex);
    
    console.log(ifExist);
}