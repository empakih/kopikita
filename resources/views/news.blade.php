<!DOCTYPE html>

<html class="dark" lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Smartani - News &amp; Insights</title>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<script id="tailwind-config">
  tailwind.config = {
    darkMode: "class",
    theme: {
      extend: {
        "colors": {
                "on-tertiary": "#5d1811",
                "error": "#ffb4ab",
                "on-secondary": "#5a005d",
                "inverse-surface": "#e5e2e1",
                "surface-container-high": "#2a2a2a",
                "surface-tint": "#66dd8b",
                "on-error": "#690005",
                "on-secondary-container": "#ffa3f7",
                "on-primary-container": "#005025",
                "secondary": "#ffaaf7",
                "on-background": "#e5e2e1",
                "surface-bright": "#3a3939",
                "primary-container": "#50c878",
                "tertiary": "#ffbeb5",
                "tertiary-fixed": "#ffdad5",
                "on-secondary-fixed-variant": "#800084",
                "primary": "#6ee591",
                "on-tertiary-fixed-variant": "#7b2e25",
                "inverse-on-surface": "#313030",
                "secondary-fixed-dim": "#ffaaf7",
                "surface-variant": "#353534",
                "secondary-fixed": "#ffd7f7",
                "on-error-container": "#ffdad6",
                "on-tertiary-fixed": "#3f0302",
                "inverse-primary": "#006d36",
                "on-primary-fixed": "#00210c",
                "surface-container-lowest": "#0e0e0e",
                "outline": "#879487",
                "surface-container-low": "#1c1b1b",
                "tertiary-fixed-dim": "#ffb4a9",
                "on-surface": "#e5e2e1",
                "surface-container-highest": "#353534",
                "primary-fixed": "#83fba5",
                "on-tertiary-container": "#782b23",
                "secondary-container": "#8f0193",
                "outline-variant": "#3e4a3f",
                "primary-fixed-dim": "#66dd8b",
                "on-surface-variant": "#bdcabc",
                "on-secondary-fixed": "#380039",
                "tertiary-container": "#ff9587",
                "surface": "#131313",
                "surface-dim": "#131313",
                "on-primary": "#003919",
                "error-container": "#93000a",
                "background": "#131313",
                "on-primary-fixed-variant": "#005227",
                "surface-container": "#201f1f"
        },
        "borderRadius": {
                "DEFAULT": "0.25rem",
                "lg": "0.5rem",
                "xl": "0.75rem",
                "full": "9999px"
        },
        "spacing": {
                "xl": "80px",
                "margin": "40px",
                "gutter": "24px",
                "xs": "4px",
                "lg": "48px",
                "md": "24px",
                "sm": "12px",
                "base": "8px"
        },
        "fontFamily": {
                "label-sm": [
                        "Inter"
                ],
                "label-md": [
                        "Inter"
                ],
                "headline-sm": [
                        "Inter"
                ],
                "body-md": [
                        "Inter"
                ],
                "body-lg": [
                        "Inter"
                ],
                "headline-md": [
                        "Inter"
                ],
                "display-lg": [
                        "Inter"
                ]
        },
        "fontSize": {
                "label-sm": [
                        "12px",
                        {
                                "lineHeight": "1.4",
                                "fontWeight": "500"
                        }
                ],
                "label-md": [
                        "14px",
                        {
                                "lineHeight": "1.4",
                                "letterSpacing": "0.05em",
                                "fontWeight": "500"
                        }
                ],
                "headline-sm": [
                        "24px",
                        {
                                "lineHeight": "1.3",
                                "fontWeight": "600"
                        }
                ],
                "body-md": [
                        "16px",
                        {
                                "lineHeight": "1.6",
                                "fontWeight": "400"
                        }
                ],
                "body-lg": [
                        "18px",
                        {
                                "lineHeight": "1.6",
                                "fontWeight": "400"
                        }
                ],
                "headline-md": [
                        "32px",
                        {
                                "lineHeight": "1.2",
                                "letterSpacing": "-0.01em",
                                "fontWeight": "600"
                        }
                ],
                "display-lg": [
                        "48px",
                        {
                                "lineHeight": "1.1",
                                "letterSpacing": "-0.02em",
                                "fontWeight": "700"
                        }
                ]
        }
},
    },
  }
</script>
<style>
        .glass-card {
            background-color: rgba(255, 255, 255, 0.03);
            backdrop-filter: blur(20px);
            -webkit-backdrop-filter: blur(20px);
            border: 1px solid rgba(255, 255, 255, 0.1);
            border-top-color: rgba(255, 255, 255, 0.2);
        }
        .glow-emerald {
            box-shadow: 0 0 60px rgba(80, 200, 120, 0.1);
        }
        .glow-purple {
            box-shadow: 0 0 60px rgba(143, 1, 147, 0.15);
        }
    </style>
</head>
<body class="bg-background text-on-background min-h-screen flex flex-col font-body-md antialiased selection:bg-primary-container selection:text-on-primary-container">
<!-- TopNavBar -->
<header class="bg-surface/30 backdrop-blur-xl docked full-width top-0 sticky z-50 border-b border-outline-variant/10 flat no shadows">
<div class="flex justify-between items-center px-margin py-md w-full max-w-7xl mx-auto">
<div class="font-headline-md text-headline-md font-bold text-primary tracking-tight">Smartani</div>
<nav class="hidden md:flex space-x-lg items-center">
<a class="text-on-surface/80 font-label-md font-label-md text-label-md hover:text-primary transition-all duration-300 ease-in-out" href="/team">About Us</a>
<a class="text-on-surface/80 font-label-md font-label-md text-label-md hover:text-primary transition-all duration-300 ease-in-out" href="/">Solutions</a>
<a class="text-primary border-b-2 border-primary pb-1 font-label-md font-label-md text-label-md hover:text-primary transition-all duration-300 ease-in-out scale-95 transition-transform duration-200" href="/news">News</a>
<a class="text-on-surface/80 font-label-md font-label-md text-label-md hover:text-primary transition-all duration-300 ease-in-out" href="/#contact">Contact</a>
</nav>
<button class="bg-primary text-on-primary px-md py-sm rounded-lg hover:bg-primary-fixed-dim transition-all duration-300 ease-in-out font-label-md text-label-md flex items-center gap-2">
                Get Started
                <span class="material-symbols-outlined" data-icon="arrow_forward" data-weight="regular">arrow_forward</span>
</button>
</div>
</header>
<main class="flex-grow w-full max-w-7xl mx-auto px-margin py-xl space-y-xl">
<!-- Featured Article Hero -->
<section class="relative w-full rounded-lg overflow-hidden glass-card glow-emerald min-h-[500px] flex items-end">
<div class="absolute inset-0 z-0">
<img class="w-full h-full object-cover opacity-60 mix-blend-luminosity" data-alt="A highly advanced, dimly lit hydroponic vertical farming facility. Rows of lush green plants are illuminated by precise, glowing neon purple and emerald green LED growth lights. The setting implies deep tech integration, biological precision, and a pristine, sterile environment characteristic of visionary B2B agriculture." src="https://placehold.co/600x400/50C878/FFFFFF?text=A+highly+advanced%2C+dimly+lit+hydroponic+vertical+farming+facility.+Rows+of+lush+green+plants+are+illuminated+by+precise%2C+glowing+neon+purple+and+emerald+green+LED+growth+lights.+The+setting+implies+deep+tech+integration%2C+biological+precision%2C+and+a+pristine%2C+sterile+environment+characteristic+of+visionary+B2B+agriculture."/>
<div class="absolute inset-0 bg-gradient-to-t from-background via-background/80 to-transparent"></div>
</div>
<div class="relative z-10 p-lg w-full md:w-2/3 space-y-md">
<div class="flex items-center gap-sm">
<span class="bg-primary-container/20 text-primary border border-primary/30 px-sm py-xs rounded-full font-label-sm text-label-sm uppercase tracking-widest backdrop-blur-sm">Featured Report</span>
<span class="text-on-surface-variant font-label-md text-label-md">Oct 24, 2024</span>
</div>
<h1 class="font-display-lg text-display-lg text-on-surface">The Impact of AI on Global Food Security</h1>
<p class="font-body-lg text-body-lg text-on-surface-variant">Exploring how predictive machine learning models are optimizing yield vectors and stabilizing supply chains in high-density urban environments.</p>
<button class="mt-md text-primary font-label-md text-label-md hover:text-primary-fixed-dim transition-colors duration-300 border-b border-primary/50 hover:border-primary pb-1 flex items-center gap-sm w-max">
                    Read the Full Report
                    <span class="material-symbols-outlined text-sm" data-icon="arrow_forward">arrow_forward</span>
</button>
</div>
</section>
<!-- Category Filters -->
<section class="flex flex-wrap gap-sm justify-center py-md border-b border-outline-variant/20">
<button class="bg-surface-container-high text-primary border border-primary/30 px-md py-sm rounded-full font-label-md text-label-md transition-all duration-300 shadow-[0_0_15px_rgba(110,229,145,0.1)]">All News</button>
<button class="glass-card text-on-surface hover:text-primary hover:border-primary/50 px-md py-sm rounded-full font-label-md text-label-md transition-all duration-300">IoT Sensors</button>
<button class="glass-card text-on-surface hover:text-primary hover:border-primary/50 px-md py-sm rounded-full font-label-md text-label-md transition-all duration-300">Case Studies</button>
<button class="glass-card text-on-surface hover:text-primary hover:border-primary/50 px-md py-sm rounded-full font-label-md text-label-md transition-all duration-300">Company News</button>
<button class="glass-card text-on-surface hover:text-secondary hover:border-secondary/50 px-md py-sm rounded-full font-label-md text-label-md transition-all duration-300 flex items-center gap-xs">
<span class="w-2 h-2 rounded-full bg-secondary shadow-[0_0_8px_rgba(255,170,247,0.8)]"></span>
                Tech Updates
            </button>
</section>
<!-- Article Grid -->
<section class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-gutter">
<!-- Card 1 -->
<article class="glass-card rounded-lg overflow-hidden flex flex-col group hover:border-primary/30 transition-all duration-500 ease-in-out hover:-translate-y-1">
<div class="h-48 relative overflow-hidden">
<img class="w-full h-full object-cover opacity-70 group-hover:opacity-100 transition-opacity duration-500 mix-blend-luminosity" data-alt="Close up of a highly sophisticated digital sensor node attached to a plant stem in a dark, high-tech agricultural setting. A faint emerald green laser line scans the leaf surface, emphasizing data collection and precision farming metrics." src="https://placehold.co/600x400/50C878/FFFFFF?text=Close+up+of+a+highly+sophisticated+digital+sensor+node+attached+to+a+plant+stem+in+a+dark%2C+high-tech+agricultural+setting.+A+faint+emerald+green+laser+line+scans+the+leaf+surface%2C+emphasizing+data+collection+and+precision+farming+metrics."/>
<div class="absolute inset-0 bg-gradient-to-t from-surface-container-low to-transparent"></div>
<div class="absolute top-sm right-sm bg-background/80 backdrop-blur border border-outline-variant/30 px-sm py-xs rounded-lg font-label-sm text-label-sm text-on-surface-variant">IoT Sensors</div>
</div>
<div class="p-md flex flex-col flex-grow space-y-sm">
<span class="text-primary/80 font-label-sm text-label-sm">Oct 18, 2024</span>
<h3 class="font-headline-sm text-headline-sm text-on-surface group-hover:text-primary transition-colors duration-300">Next-Gen Soil Moisture Telemetry</h3>
<p class="font-body-md text-body-md text-on-surface-variant line-clamp-3 flex-grow">Deployment of our ultra-low-power sensor arrays has demonstrated a 22% reduction in water consumption across pilot facilities.</p>
<a class="text-primary font-label-md text-label-md inline-flex items-center gap-xs mt-auto w-max group/link" href="#">
                        Read More
                        <span class="material-symbols-outlined text-sm group-hover/link:translate-x-1 transition-transform" data-icon="arrow_forward">arrow_forward</span>
</a>
</div>
</article>
<!-- Card 2 -->
<article class="glass-card rounded-lg overflow-hidden flex flex-col group hover:border-secondary/30 transition-all duration-500 ease-in-out hover:-translate-y-1 relative">
<div class="absolute -inset-1 bg-gradient-to-r from-secondary-container/0 via-secondary-container/10 to-secondary-container/0 opacity-0 group-hover:opacity-100 transition-opacity duration-500 blur-xl z-0"></div>
<div class="h-48 relative overflow-hidden z-10">
<img class="w-full h-full object-cover opacity-70 group-hover:opacity-100 transition-opacity duration-500 mix-blend-luminosity" data-alt="Abstract view of a glowing digital dashboard displaying complex biological metrics. Bright neon purple and stark white lines graph plant growth rates against a deep black background, suggesting advanced analytics and systems control." src="https://placehold.co/600x400/50C878/FFFFFF?text=Abstract+view+of+a+glowing+digital+dashboard+displaying+complex+biological+metrics.+Bright+neon+purple+and+stark+white+lines+graph+plant+growth+rates+against+a+deep+black+background%2C+suggesting+advanced+analytics+and+systems+control."/>
<div class="absolute inset-0 bg-gradient-to-t from-surface-container-low to-transparent"></div>
<div class="absolute top-sm right-sm bg-background/80 backdrop-blur border border-secondary/30 px-sm py-xs rounded-lg font-label-sm text-label-sm text-secondary flex items-center gap-1">
<span class="material-symbols-outlined text-[12px]" data-icon="bolt" data-weight="fill">bolt</span>
                        Tech Updates
                    </div>
</div>
<div class="p-md flex flex-col flex-grow space-y-sm z-10 relative">
<span class="text-secondary/80 font-label-sm text-label-sm">Oct 12, 2024</span>
<h3 class="font-headline-sm text-headline-sm text-on-surface group-hover:text-secondary transition-colors duration-300">Smartani OS v2.4 Released</h3>
<p class="font-body-md text-body-md text-on-surface-variant line-clamp-3 flex-grow">Introducing dynamic photon flux adjustment algorithms to optimize photosynthesis cycles in real-time.</p>
<a class="text-secondary font-label-md text-label-md inline-flex items-center gap-xs mt-auto w-max group/link" href="#">
                        Read More
                        <span class="material-symbols-outlined text-sm group-hover/link:translate-x-1 transition-transform" data-icon="arrow_forward">arrow_forward</span>
</a>
</div>
</article>
<!-- Card 3 -->
<article class="glass-card rounded-lg overflow-hidden flex flex-col group hover:border-primary/30 transition-all duration-500 ease-in-out hover:-translate-y-1">
<div class="h-48 relative overflow-hidden">
<img class="w-full h-full object-cover opacity-70 group-hover:opacity-100 transition-opacity duration-500 mix-blend-luminosity" data-alt="A wide architectural shot of a massive, sterile indoor farming facility. Imposing rows of hydroponic towers stretch into the distance. The lighting is low-key, with striking beams of emerald green light cutting through the clean, industrial atmosphere." src="https://placehold.co/600x400/50C878/FFFFFF?text=A+wide+architectural+shot+of+a+massive%2C+sterile+indoor+farming+facility.+Imposing+rows+of+hydroponic+towers+stretch+into+the+distance.+The+lighting+is+low-key%2C+with+striking+beams+of+emerald+green+light+cutting+through+the+clean%2C+industrial+atmosphere."/>
<div class="absolute inset-0 bg-gradient-to-t from-surface-container-low to-transparent"></div>
<div class="absolute top-sm right-sm bg-background/80 backdrop-blur border border-outline-variant/30 px-sm py-xs rounded-lg font-label-sm text-label-sm text-on-surface-variant">Case Studies</div>
</div>
<div class="p-md flex flex-col flex-grow space-y-sm">
<span class="text-primary/80 font-label-sm text-label-sm">Sep 28, 2024</span>
<h3 class="font-headline-sm text-headline-sm text-on-surface group-hover:text-primary transition-colors duration-300">Scaling Vertical Yields in Tokyo</h3>
<p class="font-body-md text-body-md text-on-surface-variant line-clamp-3 flex-grow">How a leading urban agriculture firm utilized Smartani infrastructure to increase basil production density by 40%.</p>
<a class="text-primary font-label-md text-label-md inline-flex items-center gap-xs mt-auto w-max group/link" href="#">
                        Read More
                        <span class="material-symbols-outlined text-sm group-hover/link:translate-x-1 transition-transform" data-icon="arrow_forward">arrow_forward</span>
</a>
</div>
</article>
</section>
<!-- Newsletter Section -->
<section class="glass-card rounded-lg p-xl flex flex-col md:flex-row items-center justify-between gap-lg relative overflow-hidden glow-emerald mt-xl">
<div class="absolute -right-20 -top-20 w-64 h-64 bg-primary-container/10 rounded-full blur-3xl"></div>
<div class="relative z-10 max-w-lg space-y-sm">
<h2 class="font-headline-md text-headline-md text-on-surface">Join the Future of Farming</h2>
<p class="font-body-md text-body-md text-on-surface-variant">Subscribe to receive exclusive insights on precision agriculture, system optimization vectors, and major industry shifts directly to your inbox.</p>
</div>
<div class="relative z-10 w-full md:w-auto flex-grow max-w-md">
<form class="flex flex-col sm:flex-row gap-sm">
<div class="relative flex-grow">
<span class="material-symbols-outlined absolute left-sm top-1/2 -translate-y-1/2 text-on-surface-variant text-opacity-50" data-icon="mail">mail</span>
<input class="w-full bg-surface-container-lowest border border-outline-variant/30 rounded-lg focus:border-primary focus:ring-1 focus:ring-primary text-on-surface placeholder:text-on-surface-variant/30 py-sm pl-xl pr-sm font-body-md text-body-md transition-colors" placeholder="Enter your business email" required="" type="email"/>
</div>
<button class="bg-primary text-on-primary px-lg py-sm rounded-lg hover:bg-primary-fixed-dim hover:shadow-[0_0_20px_rgba(110,229,145,0.4)] transition-all duration-300 ease-in-out font-label-md text-label-md whitespace-nowrap" type="submit">
                        Subscribe
                    </button>
</form>
<p class="font-label-sm text-label-sm text-on-surface-variant/50 mt-xs text-center md:text-left">Unsubscribe at any time. Read our Privacy Policy.</p>
</div>
</section>
</main>
<!-- Footer -->
<footer class="bg-background full-width bottom-0 border-t border-outline-variant/10 flat no shadows mt-auto">
<div class="flex flex-col md:flex-row justify-between items-center px-margin py-lg w-full max-w-7xl mx-auto space-y-md md:space-y-0">
<div class="font-headline-sm text-headline-sm font-bold text-primary opacity-80 hover:opacity-100 transition-opacity">Smartani</div>
<nav class="flex flex-wrap justify-center gap-md">
<a class="text-on-surface-variant font-label-sm text-label-sm hover:text-secondary-fixed-dim transition-colors duration-300" href="#">Privacy Policy</a>
<a class="text-on-surface-variant font-label-sm text-label-sm hover:text-secondary-fixed-dim transition-colors duration-300" href="#">Terms of Service</a>
<a class="text-on-surface-variant font-label-sm text-label-sm hover:text-secondary-fixed-dim transition-colors duration-300" href="#">LinkedIn</a>
<a class="text-on-surface-variant font-label-sm text-label-sm hover:text-secondary-fixed-dim transition-colors duration-300" href="#">Global Support</a>
</nav>
<div class="text-on-surface-variant font-body-md text-body-md text-center md:text-right text-sm">
                © 2024 Smartani Precision Farming Tech. All rights reserved.
            </div>
</div>
</footer>
</body></html>