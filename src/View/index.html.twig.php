{% extends 'base.html.twig' %}

{% block title %} Products {% endblock %}

{% block content %}
<main class="row justify-content-center align-items-center px-3">
    {% for products in product %}
    <div class="container col-sm-4">
        <div class="card" style="width: 100%;">
            <img class="card-img-top" src="" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">{{ products }}</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
        </div>
    </div>
    {% endfor %}
</main>
{% endblock %}
