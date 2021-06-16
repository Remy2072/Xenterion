var eur = phpbal / 100;
eur = eur.toLocaleString('en-US', { style: 'currency', currency: 'EUR' });
document.getElementById('balance').innerHTML = eur;