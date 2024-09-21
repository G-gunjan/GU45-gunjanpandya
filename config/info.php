<?php

return [
    'sitename' => 'Gunjan Pandya',
    'navlinks' => [
        [
            'id' => 'college',
            'name' => 'College',
            'url' => '/projects/college',
            'image' => 'images/college.jpeg',
        ],
        [
            'id' => 'technology',
            'name' => 'Technology',
            'url' => '/projects/technology',
            'image' => 'images/technology.jpeg',
        ],
        [
            'id' => 'events',
            'name' => 'Events',
            'url' => '/projects/events',
            'image' => 'images/events.jpeg',
        ],
    ],
    'pagelinks' => [
        [
            'name' => 'Home',
            'url' => '/',
        ],
        [
            'name' => 'About',
            'url' => '/about',
        ],
        [
            'name' => 'Projects',
            'url' => '/projects',
        ],
        [
            'name' => 'Blog',
            'url' => '/blog',
        ],
    ],
    'footerlinks' => [
        [
            'name' => 'Home',
            'url' => '/',
        ],
        [
            'name' => 'About',
            'url' => '/about',
        ],
        [
            'name' => 'Contact',
            'url' => '/contact',
        ],
    ],
    'sociallinks' => [
        [
            'title' => 'Twitter',
            'name' => 'icons.twitter',
            'url' => 'https://x.com/gunjan',
        ],
        [
            'title' => 'Facebook',
            'name' => 'icons.facebook',
            'url' => 'https://facebook.com/gunjan',
        ],
        [
            'title' => 'Instagram',
            'name' => 'icons.instagram',
            'url' => 'https://www.instagram.com/pandya_970?igsh=bWZ3dG1oMmF5a29s',
        ],
        [
            'title' => 'Linkedin',
            'name' => 'icons.linkedin',
            'url' => 'https://www.linkedin.com/in/gunjan-ajay-pandya-8640152a7?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app',
        ],
    ],
    'taglist' => [
        [
            'id' => 'trends',
            'name' => 'Trends',
        ],
        [
            'id' => 'tips',
            'name' => 'Tips',
        ],
        [
            'id' => 'ideas',
            'name' => 'Ideas',
        ],
        [
            'id' => 'security',
            'name' => 'Security',
        ],
        [
            'id' => 'gaming',
            'name' => 'Gaming',
        ],
        [
            'id' => 'climate',
            'name' => 'Climate',
        ],
        [
            'id' => 'gear',
            'name' => 'Gear',
        ],
        [
            'id' => 'reviews',
            'name' => 'Reviews',
        ],
    ],
    'routes' => [
        [
            'name' => 'welcome',
            'path' => '/',
            'view' => 'welcome',
        ],
        [
            'name' => 'about',
            'path' => '/about',
            'view' => 'about',
        ],
        [
            'name' => 'blog',
            'path' => '/blog/{articleId?}',
            'view' => 'blog',
        ],
        [
            'name' => 'projects',
            'path' => '/projects/{category?}',
            'view' => 'projects',
        ],
        [
            'name' => 'tag',
            'path' => '/tag',
            'view' => 'tag',
        ],
    ],
    'articles' => [
        [
            'id' => '1',
            'title' => 'What is the Impact of AI in Cybersecurity?',
            'image' => 'images/featured-article-01.jpeg',
            'description' => '
AI’s impact on cybersecurity is transformative, providing significant advantages such as enhanced threat detection and response. By analyzing vast amounts of data in real time, AI systems can identify potential threats and mitigate risks more efficiently than traditional methods.

This allows organizations to stay ahead of cyber threats, enabling proactive defenses and reducing response times. The speed and accuracy of AI-driven cybersecurity solutions are crucial in today’s landscape, where the volume and sophistication of cyber attacks continue to grow. However, the integration of AI also presents challenges. While AI can streamline security processes, it creates new vulnerabilities.',
            'category' => 'Technology',
            'duration' => '6 mins',
            'date' => 'Sep 20, 2024',
        ],
        [
            'id' => '2',
            'title' => 'Music Mania Website',
            'image' => 'images/featured-article-01.jpeg',
            'description' => 'Music mania project deals with creating your own music app where you can listen to music like Spotify.',
            'category' => 'Project',
            'duration' => '6 mins',
            'date' => 'Sep 20, 2024',
        ],
        [
            'id' => '3',
            'title' => 'DS-lab project',
            'image' => 'images/featured-article-01.jpeg',
            'description' => 'We have simulated data structures in programming to help understand better.',
            'category' => 'Project',
            'duration' => '6 mins',
            'date' => 'Sep 20, 2024',
        ],
        [
            'id' => '4',
            'title' => 'AI in Healthcare',
            'image' => 'images/featured-article-02.jpeg',
            'description' => 'AI in Healthcare discusses how artificial intelligence is revolutionizing the healthcare industry.',
            'category' => 'Health',
            'duration' => '7 mins',
            'date' => 'Sep 25, 2024',
        ],
    ],
];
