const divcomments = document.getElementById("comments")
const textarea = document.getElementById("textarea")
const addbtn = document.getElementById("add-btn")
// console.log(divcomments, textarea, addbtn);
const base_url = document.body.dataset.baseurl
const blogId = document.body.dataset.blogid
const author_blog = document.body.dataset.authorblog
const currentUserId = document.body.dataset.currentuser

console.log(author_blog, currentUserId);
console.log(`${base_url}/api/comments/list.php?id=${blogId}`);
function getComments(){
    axios.get(`${base_url}/api/comments/list.php?id=${blogId}`)
    .then(res =>{
        console.log(res.data)
        showComments(res.data)
    })
}

getComments()

function showComments(comments){
    let divHTML = `<h2> ${comments.length} комментария </h2>`
    for(let i in comments){
        let deleteBtn = ``

        if(currentUserId == author_blog || currentUserId == comments[i]['author_id']){
            deleteBtn = `<span onclick="removeComment(${comments[i]['id']})"> Delete </span>`
        }

        divHTML += 
        `
        
        <div class="comment">
                <div class="comment-header">
                  <div>
                    <img src="images/avatar.png" alt="">
                    ${comments[i]['full_name']}
                  </div>
                  ${deleteBtn}
                </div>
                <p>
                ${comments[i]['text']}
                </p>
        </div>

        `
    }
    divcomments.innerHTML = divHTML
}

addbtn.onclick = function(){
    axios.post(`${base_url}/api/comments/add.php`,{
        text:textarea.value,
        blog_id:blogId
    }).then(res =>{
        getComments()
        textarea.value = ""
    })
}

function removeComment(id){
    axios.delete(`${base_url}/api/comments/delete.php?id=${id}`)
    .then(res =>{
        getComments()
    })
}

