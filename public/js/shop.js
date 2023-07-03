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

/*表の値段を返す処理*/
const pcses1 = order1.map(order => order.pcs);
const prices1 = order1.map(orderItem => orderItem.item.price);
const sum1 = order1.map(order => order.pcs * order.item.price);

const pcses2 = order2.map(order => order.pcs);
const prices2 = order2.map(orderItem => orderItem.item.price);
const sum2 = order2.map(order => order.pcs * order.item.price);

const pcses3 = order3.map(order => order.pcs);
const prices3 = order3.map(orderItem => orderItem.item.price);
const sum3 = order3.map(order => order.pcs * order.item.price);

//let table1 = document.getElementsByClassName('table_1');
let span_1 = document.getElementById("price1");
var objTable1 = document.getElementById("table1");
for (let i = 0; i < sum1.length; i++){
    objTable1.rows[i+1].cells[5].innerHTML = sum1[i];
}

let span_2 = document.getElementById("price2");
var objTable2 = document.getElementById("table2");
for (let i = 0; i < sum2.length; i++){
    objTable2.rows[i+1].cells[5].innerHTML = sum2[i];
}

let span_3 = document.getElementById("price3");
var objTable3 = document.getElementById("table3");
for (let i = 0; i < sum3.length; i++){
    objTable3.rows[i+1].cells[5].innerHTML = sum3[i];
}


/*値段の合計*/

/*表示する注文期間の指定*/
function filter(){
    var year = document.getElementById('sY').value;
    var month = document.getElementById('sM').value;
    var day = document.getElementById('sD').value;
    var year = document.getElementById('uY').value;
    var month = document.getElementById('uM').value;
    var day = document.getElementById('uD').value;
}