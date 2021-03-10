let button_classic = document.querySelector("#classic");
let button_favorite = document.querySelector("#favorite");
let button_spicy = document.querySelector("#spicy");
let button_vegetarian = document.querySelector("#vegetarian");
let button_all = document.querySelector("#all");

let all_pizza=document.querySelectorAll(".cardPizza");
let all_pizza_classic = document.querySelectorAll(".classic");
let all_pizza_spicy = document.querySelectorAll(".spicy");
let all_pizza_favorite = document.querySelectorAll(".favorite");
let all_pizza_vegetarian = document.querySelectorAll(".vegetarian");

class UI{
    
    
    static displayAllPizza(){
        for(let k=0;k<all_pizza.length;k++){
            all_pizza[k].style.display='initial';
        }
    }
    
    static hideAllPizza(){
        for(let k=0;k<all_pizza.length;k++){
            all_pizza[k].style.display='none';
        }
    }
    
    
    static displayOnlyClassic(){
        for(let k=0;k<all_pizza_classic.length;k++){
             all_pizza_classic[k].style.display='initial';
        }
    }
    
    static displayOnlyFavorite(){
          for(let k=0;k<all_pizza_favorite.length;k++){
             all_pizza_favorite[k].style.display='initial';
        }
    }
    
    
    static displayOnlySpicy(){
        for(let k=0;k<all_pizza_spicy.length;k++){
             all_pizza_spicy[k].style.display='initial';
        }
    }
    
    static displayOnlyVegetarian(){
        for(let k=0;k<all_pizza_vegetarian.length;k++){
             all_pizza_vegetarian[k].style.display='initial';
        }
    }
    
    
    
}

button_classic.addEventListener("click",(e)=>{
    e.preventDefault();
    UI.hideAllPizza();
    UI.displayOnlyClassic();
})

button_favorite.addEventListener("click",(e)=>{
    e.preventDefault();
    UI.hideAllPizza();
    UI.displayOnlyFavorite();
})

button_spicy.addEventListener("click",(e)=>{
    e.preventDefault();
    UI.hideAllPizza();
    UI.displayOnlySpicy();
})

button_vegetarian.addEventListener("click",(e)=>{
    e.preventDefault();
    UI.hideAllPizza();
    UI.displayOnlyVegetarian();
})

button_all.addEventListener("click",(e)=>{
    e.preventDefault();
    UI.displayAllPizza();
})