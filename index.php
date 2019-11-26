<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Ajax quest challenge</title>
    <link rel="icon" type="image/png" href="favicon.png" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">
    <link rel='stylesheet' href='https://unpkg.com/bulma@0.7.5/css/bulma.min.css'>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css"
          integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <style>
    </style>
</head>

<body>
<section class="section">
    <div class="container">
        <h1 class="title">Chuck Norris Jokes</h1>
        <p>Reload for another joke!</p>

        <div class="content" id="chuck-norris">
        </div>
    </div>

</section>

<!-- We need to load axios first! -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.19.0/axios.min.js" integrity="sha256-S1J4GVHHDMiirir9qsXWc8ZWw74PHHafpsHp5PXtjTs=" crossorigin="anonymous"></script>
<script>
    function fetchChuckNorrisFactJSON() {
        // const pokemonId = 1;
        const url = `https://api.chucknorris.io/jokes/random`;
        axios.get(url)
            .then(function(response) {
                return response.data; // SUBTLE difference with Fetch: response.data instead of response.json()
            })
            .then(function(fact) {
                console.log('data decoded from JSON:', fact);

                // Build a block of HTML
                const factHtml = `
        <img src="${fact.icon_url}" />
        <p><strong>${fact.value}</strong></p>
      `;
                document.querySelector('#chuck-norris').innerHTML = factHtml;
            });
    }

    fetchChuckNorrisFactJSON();

    /*
    function fetchChuckNorrisFactJSON() {
        const username = 'defunkt';
        const url = `https://api.github.com/users/${username}`;
        fetch(url)
            .then(function(response) {
                return response.json();
            })
            .then(function(profile) {
                const profileHtml = `
        <p><strong>${profile.name}</strong></p>
        <img src="${profile.avatar_url}" />
      `;
                // TODO corriger toute la fonction au dessus de cette ligne
                document.querySelector('#chuck-norris').innerHTML = profileHtml;
            });
    }

    fetchChuckNorrisFactJSON(); */
</script>
</body>

</html>