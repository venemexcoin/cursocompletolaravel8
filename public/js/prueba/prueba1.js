const mxn = document.getElementById('mxn');
const eth = document.getElementById('eth');
const usd = document.getElementById('usd');

const mxn1 = document.getElementById('mxn1');
const eth1 = document.getElementById('eth1');
const btc1 = document.getElementById('btc1');

const seleccionCoin = () => {

    const selector1 = document.getElementById('selector1');

    let coin1 = selector1.value;
    obtenerCotisacion(coin1)
}

 


const obtenerCotisacion = async (coin1) => {
    
    const data = await fetch (
        `https://min-api.cryptocompare.com/data/price?fsym=${coin1}&tsyms=ETH,EUR,USD,MXN&api_key=6dba1ec3ae2979e468c477b43e2d049184c531f8f58b10d0bf47fc6e4e7bfa16`
    )
    const coti = await data.json()

    const action = coti;

    mxn.textContent = action.MXN;
    eth.textContent = action.ETH;
    usd.textContent = action.USD;
   
    console.log(coin1)
    //retardo()
}

const obtenerCotisacion1 = async () => {
    const data1 = await fetch (
        'https://min-api.cryptocompare.com/data/price?fsym=USD&tsyms=ETH,EUR,BTC,MXN&api_key=6dba1ec3ae2979e468c477b43e2d049184c531f8f58b10d0bf47fc6e4e7bfa16 '
    )
    const coti1 = await data1.json()

    const action = coti1;

    mxn1.textContent = action.MXN;
    eth1.textContent = action.ETH;
    btc1.textContent = action.BTC;
   
    
}

obtenerCotisacion()
obtenerCotisacion1()



const retardo = () => {
    setTimeout(() => {
        console.log('setTimeOut')
        obtenerCotisacion()
        obtenerCotisacion1()
    }, 60000);
}




    console.log(selector1.value)