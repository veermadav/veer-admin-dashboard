<?php
/*
Plugin Name: Veer Admin Dashboard Enhancer
Description: Custom widgets and features to enhance the WordPress admin dashboard.
Version: 1.0
Author: Veermadav C
*/
add_action('wp_dashboard_setup', function() {
    wp_add_dashboard_widget('veer_custom_note', '📌 Quick Note', function() {
        echo '<p>Welcome back, Veer! Here’s your to-do list for today ✍️</p>';
    });
});
add_action('wp_dashboard_setup', function() {
    wp_add_dashboard_widget('veer_color_switcher', '🎨 Customize Admin Colors', function() {
        echo '<p>You can change your dashboard color scheme <a href="' . admin_url('profile.php') . '">here</a>.</p>';
    });
});
add_action('wp_dashboard_setup', function() {
    wp_add_dashboard_widget('veer_motivation', '🌟 Daily Motivation', function() {
        $quotes = [
            "Push yourself, because no one else is going to do it for you.",
            "Success is what comes after you stop making excuses.",
            "Don’t stop when you’re tired. Stop when you’re done.",
            "You don’t have to be great to start, but you have to start to be great."
        ];
        $random_quote = $quotes[array_rand($quotes)];
        echo "<p><em>\"$random_quote\"</em></p>";
    });
});
add_action('wp_dashboard_setup', function() {
    wp_add_dashboard_widget('veer_clock', '🕒 Live Clock', function() {
        echo '<div id="clock" style="font-size:20px;"></div>
              <script>
                function updateClock() {
                  const now = new Date();
                  document.getElementById("clock").innerText = now.toLocaleTimeString();
                }
                setInterval(updateClock, 1000);
                updateClock();
              </script>';
    });
});
