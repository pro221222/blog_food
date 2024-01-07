let data = {
  currentUser: {

    username: "vAN SON",
  },
  comments: [
    {
    parent: "0",
    id: '1',
    content:
        "Impressive! Though it seems the drag feature could be improved. But overall it looks incredible. You've nailed the design and the responsiveness at various breakpoints works really well.",
    createdAt: "1 month ago",
    username: "amyrobson",
    replies: [],
    },
    {
    parent:"0",
    id: '2',
    content:
        "Woah, your project looks awesome! How long have you been coding for? I'm still new, but think I want to dive into React as well soon. Perhaps you can give me an insight on where I can learn React? Thanks!",
    createdAt: "2 weeks ago",
    image: "./images/avatars/image-maxblagun.png",
    username: "maxblagun",
      replies: [
        {
          parent: "2",
          id: '1',
          content:
            "If you're still new, I'd recommend focusing on the fundamentals of HTML, CSS, and JS before considering React. It's very tempting to jump ahead but lay a solid foundation first.",
          createdAt: "1 week ago",
            image:  "./images/avatars/image-ramsesmiron.png",
            username: "ramsesmiron",

        },
        {
        parent: "2",
        id: '1',
        content:
            "I couldn't agree more with this. Everything moves so fast and it always seems like everyone knows the newest library/framework. But the fundamentals are what stay constant.",
        createdAt: "2 days ago",
        replyingTo: "ramsesmiron",
        image:  "./images/avatars/image-juliusomo.png",
        username: "juliusomo",

        },
      ],
    },
  ],
};

function appendFrag(frag, parent) {
  var children = [].slice.call(frag.childNodes, 0);
  parent.appendChild(frag);
  return children[1];
}

const addComment = (body, parentId, replyTo = undefined) => {
  let commentParent =
    parentId === "0"
      ? data.comments
      : data.comments.filter((c) => c.id == parentId)[0].replies;

      console.log(commentParent);
  let newComment = {
    parent: parentId,
    id: '9',
    content: body,
    createdAt: "Now",
    replyingTo: replyTo,
    replies: parentId == "0" ? [] : undefined,
    username: data.currentUser.username,
  };
  CreateComment(body,parentId === "0" ? 0 : 1,parentId)
  commentParent.push(newComment);
  initComments();
};
const deleteComment = (commentObject) => {
  if (commentObject.parent == '0') {
    data.comments = data.comments.filter((e) => e != commentObject);
  } else {
    data.comments.filter((e) => e.id === commentObject.parent)[0].replies =
      data.comments
        .filter((e) => e.id === commentObject.parent)[0]
        .replies.filter((e) => e != commentObject);
  }
  initComments();
};

const promptDel = (commentObject) => {
  const modalWrp = document.querySelector(".modal-wrp");
  modalWrp.classList.remove("invisible");
  modalWrp.querySelector(".yes").addEventListener("click", () => {
    deleteComment(commentObject);
    modalWrp.classList.add("invisible");
  });
  modalWrp.querySelector(".no").addEventListener("click", () => {
    modalWrp.classList.add("invisible");
  });
};

const spawnReplyInput = (parent, parentId, replyTo = undefined) => {
  if (parent.querySelectorAll(".reply-input")) {
    parent.querySelectorAll(".reply-input").forEach((e) => {
      e.remove();
    });
  }
  const inputTemplate = document.querySelector(".reply-input-template");
  const inputNode = inputTemplate.content.cloneNode(true);
  const addedInput = appendFrag(inputNode, parent);
  addedInput.querySelector(".bu-primary").addEventListener("click", () => {
    let commentBody = addedInput.querySelector(".cmnt-input").value;
    if (commentBody.length == 0) return;
   // CreateComment(commentBody,parentId === "0" ? 0 : 1,parentId)
    addComment(commentBody, parentId, replyTo);
  });
};

const createCommentNode = (commentObject) => {
  const commentTemplate = document.querySelector(".comment-template");
  var commentNode = commentTemplate.content.cloneNode(true);
  commentNode.querySelector(".usr-name").textContent =
    commentObject.username;
  commentNode.querySelector(".cmnt-at").textContent = commentObject.createdAt;
  commentNode.querySelector(".c-body").textContent = commentObject.content;
  if (commentObject.replyingTo)
    commentNode.querySelector(".reply-to").textContent =
      "@" + commentObject.replyingTo;

  if (commentObject.username == data.currentUser.username) {
    commentNode.querySelector(".comment").classList.add("this-user");
    commentNode.querySelector(".delete").addEventListener("click", () => {
      promptDel(commentObject);
    });
    commentNode.querySelector(".edit").addEventListener("click", (e) => {
      const path = e.path[3].querySelector(".c-body");
      if (
        path.getAttribute("contenteditable") == false ||
        path.getAttribute("contenteditable") == null
      ) {
        path.setAttribute("contenteditable", true);
        path.focus()
      } else {
        path.removeAttribute("contenteditable");
      }

    });
    return commentNode;
  }
  return commentNode;
};

const appendComment = (parentNode, commentNode, parentId) => {
  const bu_reply = commentNode.querySelector(".reply");
  const appendedCmnt = appendFrag(commentNode, parentNode);
  const replyTo = appendedCmnt.querySelector(".usr-name").textContent;
  bu_reply.addEventListener("click", () => {
    if (parentNode.classList.contains("replies")) {
      spawnReplyInput(parentNode, parentId, replyTo);
    } else {
      spawnReplyInput(
        appendedCmnt.querySelector(".replies"),
        parentId,
        replyTo
      );
    }
  });
};

function initComments(
  commentList = data.comments,
  parent = document.querySelector(".comments-wrp")
) {
  parent.innerHTML = "";
  commentList.forEach((element) => {
    var parentId = element.parent == 0 ? element.id : element.parent;
    const comment_node = createCommentNode(element);
    if (element.replies && element.replies.length > 0) {
      initComments(element.replies, comment_node.querySelector(".replies"));
    }

    appendComment(parent, comment_node, parentId);
  });
}

initComments();
const cmntInput = document.querySelector(".reply-input");
cmntInput.querySelector(".bu-primary").addEventListener("click", () => {
  let commentBody = cmntInput.querySelector(".cmnt-input").value;
  if (commentBody.length == 0) return;
  addComment(commentBody, "0");
  cmntInput.querySelector(".cmnt-input").value = "";
});

function Create() {
    return new Promise(function (resolve, reject) {
        $.ajax({
            type: 'get',
            url: 'http://127.0.0.1:8000/api/GetUser/',
            success: function (response) {
                console.log(response);
                resolve(response); // Resolve the promise with the response
            },
            error: function (error) {
                console.error("Error in Create:", error);
                reject(error); // Reject the promise with the error
            }
        });
    });
}

function CreateComment(content, depth, CommentFatherID) {
    var Post = document.getElementById('PostID').value;

    Create().then(function (userId) {
        console.log(userId);
        connection.invoke("create", content, Post, depth, CommentFatherID, userId);
    }).catch(function (error) {
        console.error("Error in CreateComment:", error);
    });
}
 $(document).ready(function () {

    connection.on("getProfileInfo", function () {
        console.log( "đã được thêm vào nhóm chat")
     });

     connection.on("newComment", function (element) {
        console.log("đa nhận comment")
        var comment = new Comment (element.commentParentsID,element.commentID,element.content,element.timeComment,element.depth,element.nameComment,[])
     });

  var PostID = document.getElementById('PostID').value;
 function loadComment(){
      $.ajax({
          type: 'get',
          url: 'http://127.0.0.1:8000/api/GetComment/'+PostID,
          success: function(response ) {
            response.forEach((element) => {
                var comment = new Comment (element.commentParentsID,element.commentID,element.content,element.timeComment,element.depth,element.nameComment,element.avatar,[])
                data.comments.push(comment)
                console.log(data)
                initComments()
            })
          },
          error: function (jqXHR, textStatus, errorThrown) {
          }
      })
  }
  loadComment()



})
function Comment(parent, id, content, createdAt, score, username,replies) {
    var self = this;
    self.parent = parent;
    self.id = id;
    self.content = content;
    self.createdAt =createdAt;
    self.score =  score;
    self.username = username ;
    self.replies = []

}
