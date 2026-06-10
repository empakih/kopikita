<!DOCTYPE html>

<html class="dark" lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Smartani - Precision Farming Technology</title>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&amp;display=swap" rel="stylesheet"/>
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
</head>
<body class="bg-background text-on-surface font-sans antialiased overflow-x-hidden">
<nav class="bg-surface/30 backdrop-blur-xl w-full top-0 sticky z-50 border-b border-outline-variant/10">
<div class="flex justify-between items-center px-margin py-md w-full max-w-7xl mx-auto">
<div class="font-headline-md text-headline-md font-bold text-primary tracking-tight">
                Smartani
            </div>
<div class="hidden md:flex space-x-lg">
<a class="text-on-surface/80 font-label-md text-label-md hover:text-primary transition-all duration-300 ease-in-out" href="/team">About Us</a>
<a class="text-on-surface/80 font-label-md text-label-md hover:text-primary transition-all duration-300 ease-in-out" href="/">Solutions</a>
<a class="text-on-surface/80 font-label-md text-label-md hover:text-primary transition-all duration-300 ease-in-out" href="/news">News</a>
<a class="text-on-surface/80 font-label-md text-label-md hover:text-primary transition-all duration-300 ease-in-out" href="/#contact">Contact</a>
</div>
<div>
<button class="bg-primary text-on-primary font-label-md text-label-md px-md py-sm rounded-lg hover:bg-primary-fixed transition-colors duration-300">
                    Get Started
                </button>
</div>
</div>
</nav>
<main>
<section class="relative pt-xl pb-xl px-margin overflow-hidden flex items-center min-h-[819px]">
<div class="absolute inset-0 z-0">
<img alt="Abstract Farming" class="w-full h-full object-cover opacity-20" data-alt="A sprawling, hyper-modern indoor vertical farm illuminated by vibrant neon purple and emerald green grow lights. Rows of lush, hydroponically grown plants stretch into the distance within a sterile, high-tech glass environment. The scene captures a minimalist, data-driven aesthetic with glowing holographic readouts floating in the air. The overall mood is futuristic, authoritative, and deeply rooted in advanced biological science." src="https://placehold.co/600x400/50C878/FFFFFF?text=A+sprawling%2C+hyper-modern+indoor+vertical+farm+illuminated+by+vibrant+neon+purple+and+emerald+green+grow+lights.+Rows+of+lush%2C+hydroponically+grown+plants+stretch+into+the+distance+within+a+sterile%2C+high-tech+glass+environment.+The+scene+captures+a+minimalist%2C+data-driven+aesthetic+with+glowing+holographic+readouts+floating+in+the+air.+The+overall+mood+is+futuristic%2C+authoritative%2C+and+deeply+rooted+in+advanced+biological+science."/>
<div class="absolute inset-0 bg-gradient-to-r from-background via-background/90 to-transparent"></div>
</div>
<div class="relative z-10 max-w-7xl mx-auto w-full grid grid-cols-1 md:grid-cols-2 gap-xl items-center">
<div class="flex flex-col space-y-md">
<h1 class="font-display-lg text-display-lg text-on-surface">
                        The Future of Precision Indoor Farming is Here
                    </h1>
<p class="font-body-lg text-body-lg text-on-surface-variant max-w-xl">
                        Optimize your harvest with integrated IoT monitoring, AI-driven insights, and enterprise ERP solutions designed for the modern greenhouse.
                    </p>
<div class="flex flex-wrap gap-md pt-sm">
<button class="bg-primary text-on-primary font-label-md text-label-md px-lg py-md rounded-lg hover:shadow-[0_0_40px_-10px_rgba(110,229,145,0.4)] transition-all duration-300 ease-in-out">
                            Explore Solutions
                        </button>
<button class="border border-outline-variant text-primary font-label-md text-label-md px-lg py-md rounded-lg hover:bg-white/5 transition-all duration-300 ease-in-out">
                            Partner With Us
                        </button>
</div>
</div>
</div>
</section>
<section class="py-xl px-margin bg-surface-container-lowest">
<div class="max-w-4xl mx-auto text-center space-y-md">
<h2 class="font-headline-md text-headline-md text-on-surface">Revolutionizing Agriculture</h2>
<p class="font-body-lg text-body-lg text-on-surface-variant">
                    Smartani is dedicated to bridging the gap between nature and technology, providing the tools needed for sustainable and efficient precision farming. We empower visionary leaders to take total control of complex living systems.
                </p>
</div>
</section>
<section class="py-xl px-margin">
<div class="max-w-7xl mx-auto">
<div class="grid grid-cols-1 md:grid-cols-3 gap-gutter">
<div class="bg-surface-container/30 backdrop-blur-xl border-t border-l border-outline-variant/20 rounded-lg p-lg flex flex-col space-y-md group hover:bg-surface-container/50 transition-all duration-300">
<div class="w-12 h-12 rounded-full bg-primary/10 flex items-center justify-center text-primary group-hover:shadow-[0_0_30px_-5px_rgba(110,229,145,0.3)] transition-shadow">
<span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">sensors</span>
</div>
<h3 class="font-headline-sm text-headline-sm text-on-surface">Environment Sensors</h3>
<p class="font-body-md text-body-md text-on-surface-variant flex-grow">
                            Deploy high-fidelity, micro-climate monitoring nodes. Track humidity, ambient temperature, and soil health with sub-second latency.
                        </p>
</div>
<div class="bg-surface-container/30 backdrop-blur-xl border-t border-l border-outline-variant/20 rounded-lg p-lg flex flex-col space-y-md group hover:bg-surface-container/50 transition-all duration-300">
<div class="w-12 h-12 rounded-full bg-secondary/10 flex items-center justify-center text-secondary group-hover:shadow-[0_0_30px_-5px_rgba(255,170,247,0.3)] transition-shadow">
<span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">emoji_objects</span>
</div>
<h3 class="font-headline-sm text-headline-sm text-on-surface">Smart LED Grow Lights</h3>
<p class="font-body-md text-body-md text-on-surface-variant flex-grow">
                            Dynamic spectrum control tailored to distinct biological growth phases. Maximize yield while minimizing energy overhead.
                        </p>
</div>
<div class="bg-surface-container/30 backdrop-blur-xl border-t border-l border-outline-variant/20 rounded-lg p-lg flex flex-col space-y-md group hover:bg-surface-container/50 transition-all duration-300">
<div class="w-12 h-12 rounded-full bg-primary/10 flex items-center justify-center text-primary group-hover:shadow-[0_0_30px_-5px_rgba(110,229,145,0.3)] transition-shadow">
<span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">dashboard</span>
</div>
<h3 class="font-headline-sm text-headline-sm text-on-surface">ERP Dashboard</h3>
<p class="font-body-md text-body-md text-on-surface-variant flex-grow">
                            A centralized glassmorphic interface uniting all facility data. Predict harvest dates, manage supply chains, and optimize resources.
                        </p>
</div>
</div>
</div>
</section>
<section class="py-xl px-margin bg-surface-container-lowest">
<div class="max-w-7xl mx-auto space-y-lg">
<h2 class="font-headline-md text-headline-md text-on-surface border-l-4 border-primary pl-sm">Latest Insights</h2>
<div class="grid grid-cols-1 md:grid-cols-3 gap-gutter">
<div class="group cursor-pointer">
<div class="aspect-video w-full rounded-lg overflow-hidden mb-sm relative">
<img alt="Sensor close up" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" data-alt="A close-up view of an advanced environmental sensor attached to a vibrant green plant leaf in a laboratory setting. The sensor emits a soft emerald glow, highlighting the intricate veins of the leaf. The background is a dark, out-of-focus high-tech greenhouse, emphasizing a sleek, glassmorphic design language. The lighting is dramatic, showcasing the intersection of nature and cutting-edge technology." src="https://placehold.co/600x400/50C878/FFFFFF?text=A+close-up+view+of+an+advanced+environmental+sensor+attached+to+a+vibrant+green+plant+leaf+in+a+laboratory+setting.+The+sensor+emits+a+soft+emerald+glow%2C+highlighting+the+intricate+veins+of+the+leaf.+The+background+is+a+dark%2C+out-of-focus+high-tech+greenhouse%2C+emphasizing+a+sleek%2C+glassmorphic+design+language.+The+lighting+is+dramatic%2C+showcasing+the+intersection+of+nature+and+cutting-edge+technology."/>
<div class="absolute inset-0 bg-black/20 group-hover:bg-transparent transition-colors duration-300"></div>
</div>
<div class="space-y-xs">
<span class="font-label-sm text-label-sm text-on-surface-variant uppercase tracking-wider">Oct 12, 2024</span>
<h4 class="font-headline-sm text-headline-sm text-on-surface group-hover:text-primary transition-colors">Advancements in Micro-Climate Sensing</h4>
<p class="font-label-md text-label-md text-primary pt-xs">Read More →</p>
</div>
</div>
<div class="group cursor-pointer">
<div class="aspect-video w-full rounded-lg overflow-hidden mb-sm relative">
<img alt="Dashboard Interface" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" data-alt="A sleek, dark-themed digital dashboard displayed on a large glass screen, showing complex agricultural data. The interface features glowing neon purple and emerald green charts, graphs, and health gauges against a deep black background. The surrounding environment suggests a sterile control room in a state-of-the-art precision farming facility. The aesthetic is strictly minimalist, professional, and visually striking." src="https://placehold.co/600x400/50C878/FFFFFF?text=A+sleek%2C+dark-themed+digital+dashboard+displayed+on+a+large+glass+screen%2C+showing+complex+agricultural+data.+The+interface+features+glowing+neon+purple+and+emerald+green+charts%2C+graphs%2C+and+health+gauges+against+a+deep+black+background.+The+surrounding+environment+suggests+a+sterile+control+room+in+a+state-of-the-art+precision+farming+facility.+The+aesthetic+is+strictly+minimalist%2C+professional%2C+and+visually+striking."/>
<div class="absolute inset-0 bg-black/20 group-hover:bg-transparent transition-colors duration-300"></div>
</div>
<div class="space-y-xs">
<span class="font-label-sm text-label-sm text-on-surface-variant uppercase tracking-wider">Oct 05, 2024</span>
<h4 class="font-headline-sm text-headline-sm text-on-surface group-hover:text-primary transition-colors">Visualizing Yield: The New ERP Standard</h4>
<p class="font-label-md text-label-md text-primary pt-xs">Read More →</p>
</div>
</div>
<div class="group cursor-pointer">
<div class="aspect-video w-full rounded-lg overflow-hidden mb-sm relative">
<img alt="Robotic Farming" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" data-alt="A robotic arm delicately tending to a row of seedlings under intense, specialized LED grow lights. The lighting casts a distinct pink and purple hue over the pristine, reflective surfaces of the automated farming system. The composition is highly symmetrical, reinforcing a sense of order, precision, and technological mastery. The overall visual style aligns with a premium, dark-mode B2B brand identity." src="https://placehold.co/600x400/50C878/FFFFFF?text=A+robotic+arm+delicately+tending+to+a+row+of+seedlings+under+intense%2C+specialized+LED+grow+lights.+The+lighting+casts+a+distinct+pink+and+purple+hue+over+the+pristine%2C+reflective+surfaces+of+the+automated+farming+system.+The+composition+is+highly+symmetrical%2C+reinforcing+a+sense+of+order%2C+precision%2C+and+technological+mastery.+The+overall+visual+style+aligns+with+a+premium%2C+dark-mode+B2B+brand+identity."/>
<div class="absolute inset-0 bg-black/20 group-hover:bg-transparent transition-colors duration-300"></div>
</div>
<div class="space-y-xs">
<span class="font-label-sm text-label-sm text-on-surface-variant uppercase tracking-wider">Sep 28, 2024</span>
<h4 class="font-headline-sm text-headline-sm text-on-surface group-hover:text-primary transition-colors">Automated Harvesting Protocols</h4>
<p class="font-label-md text-label-md text-primary pt-xs">Read More →</p>
</div>
</div>
</div>
</div>
</section>
<section class="py-xl px-margin relative" id="contact">
<div class="max-w-3xl mx-auto bg-surface-container/40 backdrop-blur-xl border-t border-l border-outline-variant/20 rounded-lg p-lg md:p-xl shadow-2xl">
<div class="text-center mb-lg">
<h2 class="font-headline-md text-headline-md text-on-surface mb-xs">Initiate Partnership</h2>
<p class="font-body-md text-body-md text-on-surface-variant">Connect with our integration specialists to evaluate your facility's potential.</p>
</div>
<form class="space-y-md">
<div class="grid grid-cols-1 md:grid-cols-2 gap-md">
<div class="space-y-xs">
<label class="font-label-sm text-label-sm text-on-surface-variant block">Full Name</label>
<input class="w-full bg-surface-container-lowest border border-outline-variant/50 rounded-lg px-md py-sm text-body-md text-on-surface focus:border-primary focus:ring-1 focus:ring-primary focus:outline-none transition-all" placeholder="Dr. Jane Doe" type="text"/>
</div>
<div class="space-y-xs">
<label class="font-label-sm text-label-sm text-on-surface-variant block">Email Address</label>
<input class="w-full bg-surface-container-lowest border border-outline-variant/50 rounded-lg px-md py-sm text-body-md text-on-surface focus:border-primary focus:ring-1 focus:ring-primary focus:outline-none transition-all" placeholder="jane@facility.com" type="email"/>
</div>
</div>
<div class="space-y-xs">
<label class="font-label-sm text-label-sm text-on-surface-variant block">Partnership Type</label>
<select class="w-full bg-surface-container-lowest border border-outline-variant/50 rounded-lg px-md py-sm text-body-md text-on-surface focus:border-primary focus:ring-1 focus:ring-primary focus:outline-none transition-all appearance-none">
<option class="text-on-surface/30" disabled="" selected="" value="">Select an option</option>
<option value="farmer">Commercial Farmer</option>
<option value="b2b">B2B Integrator</option>
<option value="general">General Inquiry</option>
</select>
</div>
<div class="space-y-xs">
<label class="font-label-sm text-label-sm text-on-surface-variant block">Message</label>
<textarea class="w-full bg-surface-container-lowest border border-outline-variant/50 rounded-lg px-md py-sm text-body-md text-on-surface focus:border-primary focus:ring-1 focus:ring-primary focus:outline-none transition-all resize-none" placeholder="Detail your facility dimensions and current tech stack..." rows="4"></textarea>
</div>
<button class="w-full bg-primary text-on-primary font-label-md text-label-md px-lg py-md rounded-lg hover:shadow-[0_0_40px_-10px_rgba(110,229,145,0.4)] transition-all duration-300 ease-in-out mt-md" type="submit">
                        Submit Inquiry
                    </button>
</form>
</div>
</section>
</main>
<footer class="bg-background w-full bottom-0 border-t border-outline-variant/10">
<div class="flex flex-col md:flex-row justify-between items-center px-margin py-lg w-full max-w-7xl mx-auto space-y-md md:space-y-0">
<div class="font-headline-sm text-headline-sm font-bold text-primary">
                Smartani
            </div>
<div class="flex flex-wrap justify-center gap-md">
<a class="text-on-surface-variant font-label-sm text-label-sm hover:text-secondary-fixed-dim transition-colors duration-300 opacity-80 hover:opacity-100" href="#">Privacy Policy</a>
<a class="text-on-surface-variant font-label-sm text-label-sm hover:text-secondary-fixed-dim transition-colors duration-300 opacity-80 hover:opacity-100" href="#">Terms of Service</a>
<a class="text-on-surface-variant font-label-sm text-label-sm hover:text-secondary-fixed-dim transition-colors duration-300 opacity-80 hover:opacity-100" href="#">LinkedIn</a>
<a class="text-on-surface-variant font-label-sm text-label-sm hover:text-secondary-fixed-dim transition-colors duration-300 opacity-80 hover:opacity-100" href="#">Global Support</a>
</div>
<div class="text-on-surface-variant font-body-md text-body-md text-center md:text-right">
                © 2024 Smartani Precision Farming Tech. All rights reserved.
            </div>
</div>
</footer>
</body></html>