var ft_list;
var cookie;

window.onload = function()
{
    document.getElementById("new").addEventListener("click", addTodo);
    ft_list = document.querySelector(".ft_list");
    var tmp = document.cookie;
    if (tmp) 
    {
        cookie = JSON.parse(tmp);
        cookie.forEach(function (e) {
            addEntry(e);
        });
    }

}

window.onunload = function () {
    var todo = ft_list.children;
    var newCookie = [];
    for (var i = 0; i < todo.length; i++)
        newCookie.unshift(todo[i].innerHTML);
    document.cookie = JSON.stringify(newCookie);
}

function addEntry(todo)
{
    var div = document.createElement("div");
    div.innerHTML = todo;
    div.addEventListener("click", deleteTodo);
    ft_list.insertBefore(div, ft_list.firstChild);
}

function addTodo()
{
    var todo = prompt("What do you have to do ?", '');
    if (todo)
    {
        addEntry(todo);
    }
}

function deleteTodo(todo)
{
    if(confirm("Delete this entry?"))
    {
        this.parentElement.removeChild(this);
    }
}
