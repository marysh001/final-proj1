<p> Cписок пользователей в хранилище</p>

<div class = "table-responsive small">
<table class = "table-striped table -sm">

<thead>
<tr>
<th scope="col">ID</th>
<th scope="col">Имя</th>
<th scope="col">Фамилия</th>
<th scope="col">День рождения</th>
{% if isAdmin %}
<th scope="col">Редактирование</th>
<th scope="col">Удаление</th>
{% endif %}

</tr>
</thead>

</tbody>
{% for user in users %}
<tr id="{{user.id}}">
<td>{{user.getUserId()}}</td>
<td>{{user.getUserName()}}</td>
<td>{{user.getUserLastName()}}</td>
<td>{% if user.getUserBirthday() is not empty %}
{{user.getUserBirthday() | date('d.m.Y')}}
{% else %}
<b>Не задан</b>
{% endif %}
</td>
{% if isAdmin%}

<td scope = "col"><a href="/user/edit/?id_user= {{user.getUserId()}}">Редактирование</a></td>
<td scope = "col"><a href="/user/delete/?user-id{{user.getUserId()}}
</table>
</div>

<script> 
let maxId = $('.table-responsive tbody tr: last-child td:first-child').html();
setInterval(function () {
    $.ajax({
        method: 'POST',
        url: "/user/indexRefresh/"
        data: { maxId: maxId }
    }).done(function(response){

        let users = $.parceJSON(response);
        console.log(user);
        if(users.length !=0){
            for(var k in users){
                let row = "<tr>";
                row += "<td>" + users[k].id + "</td>";
                maxId = users[k].id;
                row += "<td>" + users[k].username + "</td>";
                row +="<td>" + users[k].userlastname + "</td>";
                row +="<td>" + users[k].userbirthday + "</td>";

                row += "</tr>";
                $('content-template tbody').append(row);
            }

        }
    });
}, 3000)
</script>