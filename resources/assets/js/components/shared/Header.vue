<template>
    <div>
        <aside class="menu nav">
            <figure class="image is-128x128">
                <img class="round" src="https://bulma.io/images/placeholders/128x128.png">
            </figure>
            <br>
            <br>
            <ul class="menu-list">
                <!-- todo: convert <a> to router items -->
                <li>
                    <p class="menu-label">
                        Web Project
                    </p>
                    <ul>
                        <router-link :to="{ name: 'Project' }">ActWorthy</router-link>
                        <li>
                            <a>Iowa PHR</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <p class="menu-label">
                        Mobile Projects
                    </p>
                    <ul>
                        <!-- todo: convert to router items -->
                        <li>
                            <a>ActWorthy Mobile</a>
                        </li>
                        <li>
                            <a>Iowa PHR Android</a>
                        </li>
                        <li>
                            <a>Anko Basic Calculator</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <p class="menu-label">
                Get in touch
            </p>
            <ul class="menu-list">
                <li>
                    <a href="">About Me</a>
                </li>
                <li>
                    <a href="">Contact Me</a>
                </li>
            </ul>
        </aside>
    </div>
</template>

<script>
export default {
  name: "apphead"
};
</script>

<style scoped>
.menu.nav {
  background-color: rgba(127, 255, 212, 0.329);
  padding: 2rem;
}
.round {
  border-radius: 50%;
}
</style>

