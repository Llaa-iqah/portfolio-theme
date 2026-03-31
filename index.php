<?php get_header(); ?>
<div class="container">
<h2>Hi, I'm Fluffy. Welcome to my portfolio!</h2>
<p>Here are some of my projects:</p>

<div class="projects-grid">
 <!-- Dummy Project 1 -->
<div class="project-card">
<div class="project-image">
<img src="<?php echo esc_url( get_template_directory_uri() . '/weather icon.png' ); ?>" alt="Weather App">
</div>
<h3>Weather App</h3>
<p>A simple weather application using the OpenWeather API.</p>
<a href="https://github.com/Fluffy/weather-app" class="github-button" target="_blank">View on GitHub</a>
</div>

<!-- Dummy Project 2 -->
<div class="project-card">
<div class="project-image">
<img src="<?php echo esc_url( get_template_directory_uri() . '/image task manager.webp' ); ?>" alt="Task Manager">
</div>
<h3>Task Manager</h3>
<p>A task management tool built with JavaScript.</p>
<a href="https://github.com/Fluffy/task-manager" class="github-button" target="_blank">View on GitHub</a>
</div>

<!-- Dummy Project 3 -->

<div class="project-card">
 <div class="project-image">
<img src="<?php echo esc_url( get_template_directory_uri() . '/website.webp' ); ?>" alt="Portfolio Website">
</div>
<h3>Portfolio Website</h3>
<p>Custom WordPress portfolio theme I developed.</p>
<a href="https://github.com/Fluffy/my-portfolio-theme" class="github-button" target="_blank">View on GitHub</a>
</div>
</div>
</div>

<?php get_footer(); ?>