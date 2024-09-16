// function submitComment() {
//     var commentInput = document.getElementById('comment-input');
//     var commentsList = document.getElementById('comments-list');

//     if (commentInput.value.trim() !== '') {
//         var commentDiv = document.createElement('div');
//         commentDiv.classList.add('comment');

//         var commentText = document.createElement('p');
//         commentText.textContent = commentInput.value;

//         var commentInfo = document.createElement('div');
//         commentInfo.classList.add('comment-info');

//         var commentDate = document.createElement('span');
//         commentDate.classList.add('comment-date');
//         commentDate.textContent = getCurrentDate();

//         commentInfo.appendChild(commentDate);

//         commentDiv.appendChild(commentText);
//         commentDiv.appendChild(commentInfo);

//         commentsList.appendChild(commentDiv);

//         commentInput.value = '';
//     }
// }

// function getCurrentDate() {
//     var currentDate = new Date();
//     var options = { year: 'numeric', month: 'short', day: 'numeric', hour: 'numeric', minute: 'numeric', second: 'numeric' };
//     return currentDate.toLocaleDateString('en-US', options);
// }
