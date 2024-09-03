<!DOCTYPE html>
<html lang="eng">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Studio52</title>

    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <script src="{{ asset('js/tailwindcss.js') }}"></script>

</head>

<body class="font-sans antialiased">

    <!-- Header -->
    <header class="header bg-white w-full p-3 mb-12 hidden md:block">
        <div class="container mx-auto ">
            <div class='flex justify-between items-center'>
                <div class="header-logo flex mr-5">
                    <img class="h-[78px] xl:h-[78px] lg:h-[60px] md:h-[60px] "
                        src="{{ asset('images/logo-header.png') }}" />
                </div>
                <div class="header-menu">
                    <ul
                        class="flex items-center justify-center text-[22px] md:text-[18px] lg:text-[20px] xl:text-[22px] font-semibold">
                        @foreach (['Video', 'Audio', 'About', 'Customers', 'Resource'] as $menu)
                        <li> <a href="#" class="me-4 hover:text-neutral-600 md:me-12"> {{ $menu }} </a> </li>
                        @endforeach
                        <li> <a href="#" class="me-4 md:me-12 bg-blue-950 text-white pl-4 pr-4 p-1 rounded"> Contact
                            </a> </li>
                    </ul>
                </div>
            </div>
        </div>
    </header>

    <header class="mobile-header bg-white shadow-md p-4 md:hidden">
        <div class="flex justify-between items-center">
            <div class="text-2xl">
                <img class="h-[33px]" src="{{ asset('images/logo-header.png') }}" />
            </div>
            <button id="menu-toggle" class="text-3xl focus:outline-none text-[#2C92CF]">
                &#9776;
            </button>
        </div>

        <!-- Mobile Menu -->
        <div id="mobile-menu" class="hidden absolute top-0 left-0 w-full h-[50%] bg-white z-50">
            <div class="p-4">
                <button id="close-menu" class="text-[35px] text-right w-full focus:outline-none">
                    &times;
                </button>
                <ul class="bg-white fixed start-2 end-10 z-30 text-[18px] p-10 shadow-lg">
                    @foreach (['Video', 'Audio', 'About', 'Customers', 'Resource'] as $menu)
                    <li class="mb-4"> <a href="#" class="me-4 hover:text-neutral-600"> {{ $menu }} </a> </li>
                    @endforeach
                    <li> <a href="#" class="me-4 bg-blue-950 text-white pl-4 pr-4 p-1 rounded"> Contact </a> </li>
                </ul>
            </div>
        </div>
    </header>


    <!-- Banner -->
    <section class="banner mx-auto h-auto bg-white mt-0 md:mt-14">
        <div class='flex flex-col lg:flex-row justify-center items-center'>
            <div class="banner-card p-6 lg:p-0 lg:w-[40%]">
                <div
                    class="box-info shadow-black shadow-2xl relative w-full lg:h-[320px] lg:w-[654px] xl:h-[370px] xl:w-[654px] 2xl:h-[479px] 2xl:w-[704px] bg-[#040A5C] 2xl:ml-[200px] xl:ml-[60px] lg:ml-[60px] ">
                    <div class="box-text p-12">
                        <div
                            class="bg-[#FFFFFF] w-[234px] h-[25px] mt-7 md:w-[499px] md:h-[57px] 2xl:w-[499px] 2xl:h-[57px] xl:w-[365px] xl:h-[40px] lg:w-[330px] lg:h-[40px] absolute md:mt-10 xl:mt-9 lg:mt-8 z-[1]">
                        </div>
                        <h1
                            class="text-[25px] md:text-[55px] 2xl:text-[55px] xl:text-[40px] lg:text-[35px] text-[#1178B4] font-extrabold pl-2 mt-5 relative z-10">
                            Safety Animation </h1>
                        <h1
                            class="text-[25px] md:text-[55px] 2xl:text-[55px] xl:text-[40px] lg:text-[35px] text-white font-bold">
                            Video Case Study for GCC Industries </h1>
                        <h1 class="text-[15px] md:text-[30px] 2xl:text-[30px] xl:text-[25px] lg:text-[20px] text-white">
                            Enhancing Workplace Safety through Engaging Visual Content </h1>
                    </div>
                </div>
            </div>
            <div class="banner-image lg:w-[60%]">
                <img class=" ml-5 mt-[-30px]" style="border-radius: 40px 0px 0px 40px;"
                    src="{{ asset('images/banner.jpg') }}" />
            </div>
        </div>
    </section>

    <!-- Overview -->
    <section class="Overview bg-white mt-20">
        <div class="container mx-auto ">
            <div class='flex flex-col lg:flex-row justify-center items-center'>
                <div class="overview-video hidden lg:block w-full lg:w-1/2 mt-6 lg:mt-0">
                    <iframe
                        class="rounded-[25px] lg:rounded-[48px] xl:rounded-[75px] w-full h-[240px] lg:h-[320px] xl:h-[420px] "
                        src="https://www.youtube.com/embed/-_wvrghbtr0?si=rF_9CA04Pc3CrD1B" title="YouTube video player"
                        frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>
                <div class="overview-text w-full lg:w-1/2 ml-12">
                    <h1 class="text-[25px] md:text-[45px] font-extrabold text-[#1178B4] text-center md:text-left">
                        Overview </h1>
                    <h1 class="text-[20px] md:text-[25px] lg:text-[24px] xl:text-[25px]"> This case study highlights the
                        importance of safety in GCC industries and the role of animation videos in enhancing workplace
                        safety. At Studio52, we’re working on Safety animation video production for various industries
                        including oil and gas, construction, and manufacturing to address specific safety challenges.
                    </h1>
                </div>
            </div>
        </div>
    </section>


    <!-- Objectives -->
    <section class="objectives bg-white mt-10">
        <div class="container mx-auto">
            <h2 class="text-4xl font-extrabold text-[#040A5C] text-center mb-3">Our Objectives</h2>
            <div class="flex justify-center items-center flex-wrap">
                @foreach ([
                ['src' => 'falling-down.png', 'text' => 'Reduce workplace accidents.'],
                ['src' => 'awareness.png', 'text' => 'Improve safety awareness among employees.'],
                ['src' => 'rules.png', 'text' => 'Ensure compliance with safety regulations.']
                ] as $objective)
                <div
                    class="obj-card h-[300px] w-[300px] 2xl:h-[400px] 2xl:w-[400px] lg:h-[350px] lg:w-[350px]  md:h-[400px] md:w-[400px]  border-[#1178B4] border-2 rounded-3xl m-4 p-4 flex flex-col items-center justify-center">
                    <img class="h-[130px] w-[130px] md:h-[236px] md:w-[236px] p-3"
                        src="{{ asset('images/' . $objective['src']) }}" alt="{{ $objective['text'] }}" />
                    <p class="mt-4 text-center md:text-start text-2xl text-[#040A5C] font-semibold">{{
                        $objective['text'] }}</p>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Background -->
    <section
        class="background mt-10 bg-white bg-[url('{{ asset('images/power-plant-gas-oil-industry-twilight.jpg') }}')] bg-cover bg-center">
        <div class="mx-auto bg-[#1178B4] bg-opacity-70">
            <div class="container mx-auto">
                <div class="items-center p-8 lg:p-20">
                    <h1 class="text-3xl lg:text-[45px] font-extrabold text-white text-center mb-3"> Background </h1>
                    <p class="text-[16px] lg:text-[25px] text-white mt-4">
                        GCC industries, such as oil and gas, construction, and manufacturing, have a high demand for
                        stringent safety protocols to protect workers. Statistics <a href="#" class=" underline"> show
                            workers will retain 90% of information </a> when viewing a safety video. This is why
                        industries with comprehensive safety training programs report steadily declining accidents. And
                        we want you on board!
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Why Animation Videos Section -->
    <section class="py-10 px-5 bg-white mt-10">
        <div class="container mx-auto">
            <div class="flex flex-col lg:flex-row justify-between items-center">
                <div class="animation-text w-full lg:w-1/2 p-5">
                    <h1 class="text-[25px] lg:text-[45px] text-center md:text-left font-extrabold text-[#040A5C] mb-3">
                        Why Animation Videos</h1>
                    <p class="text-[16px] md:text-[25px] mb-6">
                        Animation videos offer visual engagement, clarity, and better retention, making them an ideal
                        medium for safety training. They simplify complex safety procedures and make the content
                        accessible to all workers.
                    </p>
                    <p class="text-[16px] md:text-[25px]">
                        Our 2D and 3D animation models successfully work to showcase even the most complicated
                        situations!
                    </p>
                </div>
                <div class="animation-videos w-full lg:w-1/2 mt-6 lg:mt-0">
                    <iframe class="rounded-[25px] lg:rounded-[75px] w-full h-[240px] lg:h-[420px]"
                        src="https://www.youtube.com/embed/-_wvrghbtr0?si=rF_9CA04Pc3CrD1B" title="YouTube video player"
                        frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </section>


    <!-- Usual Client Profile Section -->
    <section class="py-10 px-5 bg-white mt-10">
        <div class="container mx-auto">
            <h1 class="text-[25px] md:text-[45px] font-extrabold text-[#040A5C] text-center mb-3"> Our Usual Client
                Profile </h1>
            <div class="grid grid-cols-1 lg:grid-cols-2 md:grid-cols-1 gap-6">

                <div class="p-6 bg-[#DFF3FF] rounded-[26px] flex justify-between">
                    <div class="client-profile-logo">
                        <img class="w-[299px] md:w-[360px] p-3" src="{{ asset('images/oil-industry.png') }}" />
                    </div>
                    <div class="client-profile-text">
                        <h3 class="text-[22px] md:text-[35px] font-semibold text-[#1178B4] mb-3">Industry Overview</h3>
                        <p class="text-[16px] 2xl:text-[25px] xl:text-[20px] lg:text-[20px] md:text-[25px]">
                            Focused on the oil and gas sector, known for high-risk environments and the need for
                            rigorous safety standards.
                        </p>
                    </div>
                </div>

                <div class="p-6 bg-[#DFF3FF] rounded-[26px] flex justify-between">
                    <div class="client-profile-logo">
                        <img class="w-[600px] md:w-[660px]  p-3" src="{{ asset('images/worker.png') }}" />
                    </div>
                    <div class="client-profile-text">
                        <h3 class="text-[22px] md:text-[35px] font-semibold text-[#1178B4] mb-3">Safety Challenges</h3>
                        <p class="text-[16px] 2xl:text-[25px] xl:text-[20px] lg:text-[20px] md:text-[25px]">
                            Common issues include handling hazardous materials, operating heavy machinery, and ensuring
                            compliance with safety protocols. There’s also a growing risk of explosions and fires from
                            mishandling equipment and machines.
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Project Objectives Section -->
    <section class="py-10 px-5 bg-white">
        <div class="container mx-auto md:p-10">
            <h1 class="text-[25px] md:text-[45px] font-extrabold text-[#040A5C] text-center mb-3"> Project Objectives
            </h1>

            <div class="flex justify-end lg:justify-start">
                <img class="hidden lg:block h-[74.23px] w-[126.27px] " src="{{ asset('images/degine2.png') }}" />
                <img class="block lg:hidden h-[49.23px] w-[83.75px]" src="{{ asset('images/border-2.png') }}" />
            </div>

            <div class='flex flex-col lg:flex-row justify-between p-5'>
                <div class="Project-text w-full lg:w-1/2">
                    <div class="md:p-6">
                        <h3 class="text-[22px] md:text-[35px] font-bold mb-3">Primary Goals</h3>
                        <ul class="text-[16px] md:text-[25px] list-disc list-inside">
                            <li>Educate workers on essential safety practices.</li>
                            <li>Ensure compliance with industry safety regulations.</li>
                            <li>Foster a culture of safety within the organization.</li>
                        </ul>
                    </div>
                </div>
                <div class="Project-image w-full lg:w-1/2 p-6">
                    <img class=" w-[352px] h-[182.43px] 2xl:h-[461px] xl:h-[350px] xl:w-[789px] lg:h-[350px] lg:w-[789px] md:h-[461px] md:w-[789px] md:p-10 rounded-[23px] md:rounded-[75px] "
                        src="{{ asset('images/shot-red-darts-arrows-target-center-business-target-goal-success-concept.jpg') }}" />
                </div>
            </div>


            <div class='flex flex-col lg:flex-row justify-between p-5 md:mt-[-45px]'>

                <div class="Project-image order-last lg:order-first w-full lg:w-1/2 p-6">
                    <img class="w-[352px] h-[182.43px] 2xl:h-[461px] xl:h-[350px] xl:w-[789px] lg:h-[350px] lg:w-[789px] md:h-[461px] md:w-[789px] md:p-10 rounded-[23px] md:rounded-[75px]"
                        src="{{ asset('images/people-working-traditional-clothing.jpg') }}" />
                </div>
                <div class="Project-text w-full lg:w-1/2">
                    <div class="md:p-6">
                        <h3 class="text-[22px] md:text-[35px] font-bold mb-3">Specific Targets</h3>
                        <ul class="text-[16px] md:text-[25px] list-disc list-inside">
                            <li>Reduce workplace incidents by 30% within one year.</li>
                            <li>Increase safety training participation rate to 95%.</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="flex justify-start lg:justify-end">
                <img class="hidden lg:block h-[74.23px] w-[126.27px] float-end"
                    src="{{ asset('images/design1.png') }}" />
                <img class="block lg:hidden h-[49.23px] w-[83.75px]" src="{{ asset('images/border-1.png') }}" />
            </div>
        </div>
    </section>

    <!-- Solution Design Section -->
    <section class="py-10 mt-10 px-5 bg-gray-100">
        <div class="container mx-auto">
            <h1 class="text-[25px] md:text-[45px] font-extrabold text-[#040A5C] mb-3 text-center"> Solution Design </h1>

            <div class='flex flex-col lg:flex-row justify-between items-center p-10'>
                <div class="Design-image w-full lg:w-[40%] md:ml-[-100px] md:p-14 ">
                    <img class="h-[153.86px]  md:h-[307.73px] design-image1"
                        src="{{ asset('images/Mask-group.png') }}" />
                    <img class="h-[153.86px]  md:h-[307.73px] lg:h-[250px] xl:h-[307.73px] mt-[-15px] ml-[118px] md:mt-[-100px]  design-image2"
                        src="{{ asset('images/Mask-group-1.png') }}" />
                    <img class="h-[153.86px] md:h-[307.73px] mt-[-15px] md:mt-[-100px] design-image3"
                        src="{{ asset('images/Mask-group-2.png') }}" />
                </div>
                <div class="Design-text w-full lg:w-[60%] mr-10">
                    <div class="p-6">
                        <h3 class="text-[#040A5C] text-[22px] md:text-[39px] font-semibold mb-3">Animation Concept</h3>
                        <p class="text-[16px] md:text-[25px] font-medium">
                            To develop 2D and 3D animation with character-driven narratives to engage viewers and
                            effectively convey safety messages.
                        </p>
                    </div>
                    <div class="p-6">
                        <h3 class="text-[22px] md:text-[39px] font-semibold text-[#040A5C] mb-3">Key Features</h3>
                        <ul class="list-disc list-inside text-[16px] md:text-[25px] font-medium">
                            <li>Step-by-step safety procedures.</li>
                            <li>Emergency response education.</li>
                            <li>Interactive elements for instant understanding.</li>
                        </ul>
                    </div>
                    <div class="p-6">
                        <h3 class="text-[22px] md:text-[39px] font-semibold text-[#040A5C] mb-3">Customization</h3>
                        <p class="text-[16px] md:text-[25px] font-medium">
                            Custom videos to address specific safety concerns in the oil and gas sector, including work
                            at heights, confined spaces, and hazardous material handling.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Implementation Section -->
    <section class="py-10 mt-10 px-5 bg-white">
        <div class="container mx-auto">
            <h1 class="text-[25px] md:text-[45px] font-extrabold text-[#040A5C] mb-3 text-center"> Implementation </h1>
            <div class='flex flex-col lg:flex-row justify-between mt-10 mb-14'>
                <div class="Design-image lg:w-[60%] md:w-full sm:w-full">
                    <h3 class="text-[22px] md:text-[39px] font-semibold text-[#040A5C] mb-3">Production Process</h3>
                    <ul class="list-none list-inside text-[16px] md:text-[25px] font-medium mb-6">
                        <li><strong>Scriptwriting:</strong> We create clear and concise scripts outlining key safety
                            messages.</li>
                        <li><strong>Storyboarding:</strong> We visualize each scene to ensure effective storytelling.
                        </li>
                        <li><strong>Animation:</strong> Development of the animated video using industry-leading
                            software.</li>
                        <li><strong>Voice-over:</strong> Adding a professional voice-over to enhance understanding.</li>
                    </ul>
                    <h3 class="text-[22px] md:text-[39px] font-semibold text-[#040A5C] mb-3">Project Timeline</h3>
                    <ul class="list-none list-inside text-[16px] md:text-[25px] font-medium mb-6">
                        <li><strong>Month 1:</strong> Concept development and scriptwriting.</li>
                        <li><strong>Month 2:</strong> Storyboarding and initial animation.</li>
                        <li><strong>Month 3:</strong> Final animation and voice-over integration.</li>
                    </ul>
                    <h3 class="text-[22px] md:text-[39px] font-semibold text-[#040A5C] mb-3">Stakeholder Involvement
                    </h3>
                    <p class="text-[16px] md:text-[25px] font-medium">
                        Collaboration with industry experts and continuous client feedback ensures that our video
                        outputs meet safety standards and address specific needs every time. You have the final say
                        throughout the process!
                    </p>
                </div>
                <div class="Design-image lg:w-[40%] md:w-full sm:w-full ml-12 mt-10">
                    <img class="h-[153.86px]  md:h-[307.73px] design-image1"
                        src="{{ asset('images/Implementation-1.png') }}" />
                    <img class="h-[153.86px]  md:h-[307.73px] lg:h-[250px] xl:h-[307.73px] mt-[-15px] ml-[118px] md:mt-[-100px]  design-image2"
                        src="{{ asset('images/Implementation-2.png') }}" />
                    <img class="h-[153.86px] md:h-[307.73px] mt-[-15px] md:mt-[-100px] design-image3"
                        src="{{ asset('images/Implementation-3.png') }}" />
                </div>
            </div>
        </div>
        </div>
    </section>

    <!-- Results Section -->
    <section class="py-10 px-5 bg-[#040A5C] text-white">
        <div class="container mx-auto pb-10">
            <h1 class="text-[25px] md:text-[45px] font-extrabold text-white mb-3 text-center"> Results </h1>

            <div class="p-5">
                <h3 class="text-[22px] md:text-[39px] font-semibold text-[#1178B4] mb-3">Impact Assessment</h3>
                <p class="text-[16px] md:text-[25px] font-medium text-white">
                    <strong>Reduction in Accidents:</strong> Overall 20%-30% decrease in workplace incidents within six
                    months.
                </p>
                <p class="text-[16px] md:text-[25px] font-medium text-white">
                    <strong>Improved Compliance:</strong> A significant number of employees reported a better
                    understanding of safety protocols.
                </p>
            </div>
            <div class="p-5">
                <h3 class="text-[22px] md:text-[39px] font-semibold text-[#1178B4] mb-3">Employee Feedback We Receive
                </h3>
                <ul class="list-disc list-inside text-[16px] md:text-[25px] font-medium text-white">
                    <li>"The animation video made it easier to understand and remember safety procedures. Take it from
                        someone who doesn’t retain spoken or written information all that well!"</li>
                    <li>"I feel more confident in handling emergency situations after watching the video. The employer
                        makes sure we don’t feel alone in this and that takes a lot of burden and makes us more assured
                        in what we do."</li>
                </ul>
            </div>

        </div>
    </section>

    <!-- Examples Section -->
    <section class="py-10 px-5 mt-10 bg-white">
        <div class="container mx-auto">
            <h1 class="text-3xl lg:text-[45px] font-extrabold text-[#040A5C] mb-6 text-center">Examples</h1>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 xl:grid-cols-3 gap-6">
                <div class="p-4 rounded-lg">
                    <iframe class="w-full h-[200px] sm:h-[240px] lg:h-[302px]"
                        src="https://www.youtube.com/embed/-_wvrghbtr0?si=rF_9CA04Pc3CrD1B" title="YouTube video player"
                        frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                    <p class="text-[25px] underline mt-2">
                        <a target="_blank" href="https://youtu.be/-_wvrghbtr0?si=Qu3I2NtuhBTt6u3t"> Construction
                            Time-lapse Video of ExpoLink Metro Dubai | Studio52 </a>
                    </p>
                </div>
                <div class="p-4 rounded-lg">
                    <iframe class="w-full h-[200px] sm:h-[240px] lg:h-[302px]"
                        src="https://www.youtube.com/embed/-_wvrghbtr0?si=rF_9CA04Pc3CrD1B" title="YouTube video player"
                        frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                    <p class="text-[25px] underline mt-2">
                        <a target="_blank" href="https://youtu.be/-_wvrghbtr0?si=Qu3I2NtuhBTt6u3t"> Building the Future:
                            Studio 52's Construction Progress Videography Showreel </a>
                    </p>
                </div>
                <div class="p-4 rounded-lg">
                    <iframe class="w-full h-[200px] sm:h-[240px] lg:h-[302px]"
                        src="https://www.youtube.com/embed/-_wvrghbtr0?si=rF_9CA04Pc3CrD1B" title="YouTube video player"
                        frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                    <p class="text-[25px] underline mt-2">
                        <a target="_blank" href="https://youtu.be/-_wvrghbtr0?si=Qu3I2NtuhBTt6u3t"> Building the Future:
                            Studio 52's Construction Progress Videography Showreel </a>
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Conclusion -->
    <section
        class="background bg-white bg-[url('{{ asset('images/aerial-view-large-oil-refinery.jpg') }}')] bg-cover bg-center">
        <div class="mx-auto bg-[#1178B4] bg-opacity-90">
            <div class="container mx-auto">
                <div class='flex flex-col md:flex-row justify-between items-center p-8'>
                    <div
                        class="Conclusion-text w-full md:w-1/2 border-b-4 md:border-r-4 md:border-b-0 border-white pb-4 md:pb-0">
                        <h1 class="text-3xl lg:text-[45px] font-extrabold text-white mb-3">Conclusion</h1>
                        <p class=" lg:text-[25px] text-white">
                            Our safety animation video projects successfully enhance workplace safety in the oil and gas
                            industry by improving understanding and compliance with safety protocols.
                        </p>
                    </div>
                    <div class="Conclusion-text w-full md:w-1/2 md:ml-16 mt-8 md:mt-0">
                        <div>
                            <h3 class="text-xl lg:text-[25px] font-semibold text-white mb-3">Future Recommendations:
                            </h3>
                            <ul class="list-disc list-inside lg:text-[25px] font-medium text-white">
                                <li>Develop additional videos focusing on other safety aspects.</li>
                                <li>Implement regular refresher courses using animated content.</li>
                                <li>Update existing content and gain a long-term relationship with the most reliable
                                    animation video partners.</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Safety Guidelines and Industry Regulations Section -->
    <section class="p-4 bg-white mt-10">
        <div class="container mx-auto">
            <h1 class="text-3xl lg:text-[45px] font-extrabold text-[#040A5C] mb-3 text-center">Additional Resources</h1>
            <div
                class="flex flex-col lg:flex-row justify-center items-center mt-10 space-y-6 lg:space-y-0 lg:space-x-10">
                <div class="lg:w-1/2 w-full h-auto lg:h-[472px] shadow-2xl border border-black p-6">
                    <img class="h-auto lg:h-[267px] w-full lg:w-[690px] mb-4" src="{{ asset('images/image.png') }}" />
                    <h3 class="text-2xl lg:text-[35px] text-[#1178B4] mb-3 font-semibold">Safety Guidelines</h3>
                    <p class="underline text-base lg:text-[20px]">
                        <a href="#">
                            https://studio52.tv/blog/8-reasons-every-construction-company-safety-training-video/ <br>
                            https://studio52.tv/blog/strengthen-workplace-safety-training/
                        </a>
                    </p>
                </div>
                <div class="lg:w-1/2 w-full h-auto lg:h-[472px] shadow-2xl border border-black p-6">
                    <img class="h-auto lg:h-[267px] w-full lg:w-[690px] mb-4" src="{{ asset('images/image1.png') }}" />
                    <h3 class="text-2xl lg:text-[35px] text-[#1178B4] mb-3 font-semibold">Industry Regulations</h3>
                    <p class="underline text-base lg:text-[20px]">
                        <a href="#">
                            https://studio52.tv/blog/prevent-workplace-injuries-osha-compliance/
                        </a>
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Information Section -->
    <section class="p-4 bg-white text-white mt-24">
        <div class="container mx-auto border-t-2 border-black p-10">
            <div class='flex flex-col lg:flex-row justify-between items-center p-10 lg:p-0'>

                <div class="footer-logo w-full lg:w-1/3 ml-[-30px] mb-10">
                    <img class="h-[103px] w-[379px]" src="{{ asset('images/logo-header.png') }}" />
                </div>

                <div class="w-full lg:w-1/3 mb-10 text-black text-[20px] font-semibold lg:pl-14">
                    <li>Phone: +971-4-454-1064</li>
                    <li>Email: sales@studio52.tv</li>
                    <li>Website: www.studio52.tv</li>
                </div>
                <div class="w-full lg:w-1/3 text-black text-[20px] font-semibold mr-14">
                    Address: Address: Studio 52, Suite 402, Sobha Ivory 2, Business Bay, PO Box: 80752, Dubai, UAE
                </div>
            </div>
            <p class="text-[20px] text-center text-black mt-10"> Enhance your workplace safety with our engaging
                animation video solutions. Connect with us to learn more. </p>
        </div>
    </section>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const menuToggle = document.getElementById('menu-toggle');
            const mobileMenu = document.getElementById('mobile-menu');
            const closeMenu = document.getElementById('close-menu');


            menuToggle.addEventListener('click', function () {
                mobileMenu.classList.toggle('hidden');
            });


            closeMenu.addEventListener('click', function () {
                mobileMenu.classList.add('hidden');
            });


            document.addEventListener('click', function (event) {
                if (!mobileMenu.contains(event.target) && !menuToggle.contains(event.target)) {
                    mobileMenu.classList.add('hidden');
                }
            });
        });

    </script>

</body>

</html>