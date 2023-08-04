<div>
    <div class="container">
        <ul>
            <li v-for="link in links"><a :href="link.url"><img :src="getImagePath(link.img)" alt="">{{ link.text }}</a></li>
        </ul>
    </div>
</div>