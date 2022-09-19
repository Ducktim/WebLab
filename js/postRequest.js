
export const postRequest = (URL)=>{
    fetch(URL, {
        method: 'POST',
        body: 'test=1',
    })
        .then(response => response.json())
        .then(response => console.log(response))
}