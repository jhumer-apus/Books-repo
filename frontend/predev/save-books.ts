const axios = require('axios').default;

const books = [
    {
        name: "Hamlet"
    },
    {
        name: "Lost Time"
    },
    {
        name: "Greed"
    },
    {
        name: "One Piece"
    },
    {
        name: "Demon Slayer"
    },
    {
        name: "Dragon Ball Super"
    },
    {
        name: "Dota 2"
    },
    {
        name: "Valorant"
    },
    {
        name: "Gwapo Ko"
    },
    {
        name: "Hello Crush"
    },
    {
        name: "First Job"
    },
]

let result = ''

const processData = async () => {

    
        const res = await axios.get("http://127.0.0.1:8000/api/books/")
        result = res.data
    
}

processData().finally(()=>{
    if(result.length==0){
        books.forEach(async book => await axios.post("http://127.0.0.1:8000/api/books/",book))
    }
})





