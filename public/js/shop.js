let targets = document.getElementsByClassName('grade');


const grade1 = document.getElementsByClassName('grade_1');
const grade2 = document.getElementsByClassName('grade_2');
const grade3 = document.getElementsByClassName('grade_3');
const grade4 = document.getElementsByClassName('grade_4');


for(let target of targets){
    target.addEventListener('change', () => {
        if(target.checked){
            if(`grade${target.value}` === 'grade1'){
                for(let grade of grade1){
                    grade.classList.remove('invisible');
                }
            }else if(`grade${target.value}` === 'grade2'){
                for(let shop of grade2){
                    shop.classList.remove('invisible');
                }
            }else if(`grade${target.value}` === 'grade3'){
                for(let shop of grade3){
                    shop.classList.remove('invisible');
                }
            }else if(`grade${target.value}` === 'grade4'){
                for(let shop of grade3){
                    shop.classList.remove('invisible');
                }
            }
        }else{
            if(`grade${target.value}` === 'grade1'){
                for(let shop of grade1){
                    shop.classList.add('invisible');
                }
            }else if(`grade${target.value}` === 'grade2'){
                for(let shop of grade2){
                    shop.classList.add('invisible');
                }
            }else if(`grade${target.value}` === 'grade3'){
                for(let shop of grade3){
                    shop.classList.add('invisible');
                }
            }
        }
    })
    
}


const pcses = order.map(order => order.pcs);
const prices = order.map(orderItem => orderItem.item.price);



/*
for(let ord of order){
    let pic = ord.pcs;
    
    pis = pis+pic;
}
*/
const sum = order.map(order => order.pcs * order.item.price);

let table = document.getElementsByClassName('table_1');
let text = table.textContent;


let span6 = document.getElementById("price");

var objTable = document.getElementById("table1");
console.log(objTable);
//objTable.rows[2].cells[3].innerHTML = sum[2]; //これはOK


for (let i = 0; i < sum.length; i++){
    objTable.rows[i+1].cells[5].innerHTML = sum[i];
}


console.log(pcses,prices,sum);



console.log(span6);



