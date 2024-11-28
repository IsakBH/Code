/*
5. Skriv ut gangetabell
• Lag en funksjon som skriver ut gangetabellen for et gitt tall opp til
*/

const prompt=require("prompt-sync")({sigint:true});

const gangetabell = prompt("Dette tallet skal jeg printe gangetabellen til: ");

for (let i = 1; i <= 10; i++) { // for loop med let for bedre scoping
    console.log(gangetabell * i);
}
