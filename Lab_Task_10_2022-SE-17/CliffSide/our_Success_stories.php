<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Cliffside | Success Stories</title>
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="style.css" rel="stylesheet" />
    <link rel="icon" type="image/png" href="assets/BookConsulatation2.webp" />
    <!-- Owl Carousel CSS -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
      media="all"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"
      media="all"
    />
  </head>
  <body class="bg-white">
       <?php
include __DIR__ . '/includes/navbar.php';
?>


    <!-- Hero Section -->
    <section
      class="relative w-full min-h-[320px] md:min-h-[400px] flex flex-col justify-center items-center text-center"
      style="
        background: url('assets/OurSucesssHero.webp') center center / cover
          no-repeat;
      "
    >
      <div
        class="relative z-10 w-full flex flex-col items-center justify-center py-10 sm:py-16 md:py-24"
      >
        <h1
          class="text-white text-2xl sm:text-3xl md:text-5xl font-bold mb-4 sm:mb-6 drop-shadow-lg leading-tight max-w-2xl sm:max-w-3xl md:max-w-4xl mx-auto"
        >
          Trusted by companies<br class="md:hidden" />
          across Australia
        </h1>
        <div
          class="flex flex-wrap justify-center items-center gap-8 sm:gap-14 md:gap-20 mt-6 sm:mt-8 w-full px-2 sm:px-6"
        >
          <!-- Responsive company logos -->
          <img
            src="assets/amp.webp"
            alt="AMP"
            class="h-12 sm:h-16 md:h-20 lg:h-28 w-auto object-contain"
          />
          <img
            src="assets/arm_hub.webp"
            alt="ARM HUB"
            class="h-12 sm:h-16 md:h-20 lg:h-28 w-auto object-contain"
          />
          <img
            src="assets/great_soutern_bank.webp"
            alt="Great Southern Bank"
            class="h-12 sm:h-16 md:h-20 lg:h-28 w-auto object-contain"
          />
          <img
            src="assets/hourigan.webp"
            alt="Housman International"
            class="h-12 sm:h-16 md:h-20 lg:h-28 w-auto object-contain"
          />
          <img
            src="assets/wesFarmer.webp"
            alt="Wesfarmers"
            class="h-12 sm:h-16 md:h-20 lg:h-28 w-auto object-contain"
          />
          <img
            src="assets/NSW.webp"
            alt="NSW Government"
            class="h-12 sm:h-16 md:h-20 lg:h-28 w-auto object-contain"
          />
          <img
            src="assets/WesternAustraliaUni.webp"
            alt="Western Sydney"
            class="h-12 sm:h-16 md:h-20 lg:h-28 w-auto object-contain"
          />
        </div>
      </div>
    </section>
    <!-- Cybersecurity success story-1 Section with contact button -->
    <section class="w-full bg-white py-12 md:py-20">
      <div
        class="max-w-6xl mx-auto px-4 sm:px-8 flex flex-col md:flex-row items-center gap-10 md:gap-16"
      >
        <!-- Left: Text Content -->
        <div
          class="flex-1 w-full mb-10 md:mb-0 order-1 md:order-none flex flex-col"
        >
          <div class="mb-4">
            <span
              class="inline-block bg-[#E6FAF2] text-[#02B578] px-5 py-2 rounded-full text-sm font-medium"
              >Business Name Success Story</span
            >
          </div>
          <h2
            class="text-2xl sm:text-3xl md:text-4xl font-bold text-gray-900 mb-4 leading-tight"
          >
            Lorem Ipsum<br />Headline Placeholder
          </h2>
          <p class="text-gray-500 text-base sm:text-lg mb-4 max-w-lg">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
            eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim
            ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
            aliquip ex ea commodo consequat.
          </p>
          <p class="text-gray-500 text-sm sm:text-base mb-8 max-w-lg">
            Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat
            cupidatat non proident, sunt in culpa qui officia deserunt mollit
            anim id est laborum.
          </p>
          <!-- Image: mobile only, after paragraphs, before cards/button -->
          <div class="block md:hidden mb-8">
            <img
              src="assets/cybersecurity.webp"
              alt="Cybersecurity"
              class="w-full max-w-xs sm:max-w-sm rounded-xl shadow-lg object-cover mx-auto"
            />
          </div>
          <div class="flex flex-col sm:flex-row gap-4 mb-8">
            <div
              class="flex-1 bg-gray-100 rounded-xl shadow px-6 py-6 flex flex-col items-center justify-center"
            >
              <div class="text-2xl font-bold text-gray-900 mb-1">100%</div>
              <div class="text-gray-500 text-xs sm:text-sm text-center">
                Compliance lorem ipsum
              </div>
            </div>
            <div
              class="flex-1 bg-gray-100 rounded-xl shadow px-6 py-6 flex flex-col items-center justify-center"
            >
              <div class="text-2xl font-bold text-gray-900 mb-1">75%</div>
              <div class="text-gray-500 text-xs sm:text-sm text-center">
                Reduced Cost lorem ipsum
              </div>
            </div>
          </div>
          <div class="mb-8">
            <a
              href="book_a_free_consultation.html"
              class="inline-block bg-[#FFF455] hover:bg-[#FFE066] text-black font-semibold px-10 py-2 rounded-full shadow-lg transition-all duration-300"
              >Contact Us</a
            >
          </div>
        </div>
        <!-- Right: Image (desktop only) -->
        <div
          class="flex-1 w-full flex justify-center items-center order-2 md:order-none hidden md:flex"
        >
          <img
            src="assets/cybersecurity.webp"
            alt="Cybersecurity"
            class="w-full max-w-xs sm:max-w-sm md:max-w-md lg:max-w-lg xl:max-w-xl rounded-xl shadow-lg object-cover"
          />
        </div>
      </div>
    </section>

    <!-- Testimonials Slider Section -->
    <section class="bg-[#02B578] text-white py-16 md:py-24">
      <div class="max-w-5xl mx-auto px-6 sm:px-8 lg:px-10 relative">
        <div class="testimonial-carousel owl-carousel owl-theme">
          <!-- Slide 1 -->
          <div class="item">
            <div class="text-center max-w-3xl mx-auto">
              <div class="flex justify-center">
                <div
                  class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/10"
                >
                  <span class="text-3xl leading-none">“</span>
                </div>
              </div>
              <p class="mt-6 text-white/95 leading-8">
                The ongoing security awareness campaigns have greatly improved
                our staff's understanding of cybersecurity, drastically reducing
                phishing incidents. The regular third-party assessments give us
                peace of mind, ensuring our systems stay secure and aligned with
                best practices. Cliffside Cybersecurity support has been
                invaluable in strengthening our cybersecurity posture.
              </p>
              <div class="mt-8 flex flex-col items-center gap-2">
                <img
                  src="assets/DirectorHashicorp.webp"
                  alt="Director"
                  class="director-avatar"
                />
                <div class="text-[13px] md:text-sm font-semibold">
                  Business Operations Director
                </div>
                <div class="text-[11px] md:text-xs opacity-90">
                  International HR Organisation
                </div>
                <img
                  src="assets/HashiCorp.webp"
                  alt="HashiCorp"
                  class="company-logo mt-4"
                />
              </div>
            </div>
          </div>

          <!-- Slide 2 -->
          <div class="item">
            <div class="text-center max-w-3xl mx-auto">
              <div class="flex justify-center">
                <div
                  class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/10"
                >
                  <span class="text-3xl leading-none">“</span>
                </div>
              </div>
              <p class="mt-6 text-white/95 leading-8">
                Cliffside identified several hidden risks and helped us
                prioritise remediation without disrupting operations. Their
                practical approach and clear communication made a measurable
                difference to our security posture.
              </p>
              <div class="mt-8 flex flex-col items-center gap-2">
                <img
                  src="assets/DirectorHashicorp.webp"
                  alt="Director"
                  class="director-avatar"
                />
                <div class="text-[13px] md:text-sm font-semibold">
                  Technology Lead
                </div>
                <div class="text-[11px] md:text-xs opacity-90">
                  FinTech Company
                </div>
                <img
                  src="assets/HashiCorp.webp"
                  alt="HashiCorp"
                  class="company-logo mt-4"
                />
              </div>
            </div>
          </div>

          <!-- Slide 3 -->
          <div class="item">
            <div class="text-center max-w-3xl mx-auto">
              <div class="flex justify-center">
                <div
                  class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/10"
                >
                  <span class="text-3xl leading-none">“</span>
                </div>
              </div>
              <p class="mt-6 text-white/95 leading-8">
                Their penetration testing and follow-up assurance gave us clear,
                actionable insights. We fixed high-risk issues quickly and
                improved our compliance readiness ahead of schedule.
              </p>
              <div class="mt-8 flex flex-col items-center gap-2">
                <img
                  src="assets/DirectorHashicorp.webp"
                  alt="Director"
                  class="director-avatar"
                />
                <div class="text-[13px] md:text-sm font-semibold">
                  Head of IT Security
                </div>
                <div class="text-[11px] md:text-xs opacity-90">
                  Healthcare Provider
                </div>
                <img
                  src="assets/HashiCorp.webp"
                  alt="HashiCorp"
                  class="company-logo mt-4"
                />
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Cybersecurity success story-2 Section with contact button -->
    <section class="w-full bg-white py-12 md:py-20">
      <div
        class="max-w-6xl mx-auto px-4 sm:px-8 flex flex-col md:flex-row items-center gap-10 md:gap-16"
      >
        <!-- left part: Image (desktop only) -->
        <div
          class="flex-1 w-full flex justify-center items-center order-2 md:order-none hidden md:flex"
        >
          <img
            src="assets/cybericon2.webp"
            alt="Cybersecurity"
            class="w-full max-w-xs sm:max-w-sm md:max-w-md lg:max-w-lg xl:max-w-xl rounded-xl shadow-lg object-cover"
          />
        </div>
        <!-- right part: Text Content -->
        <div
          class="flex-1 w-full mb-10 md:mb-0 order-1 md:order-none flex flex-col"
        >
          <div class="mb-4">
            <span
              class="inline-block bg-[#E6FAF2] text-[#02B578] px-5 py-2 rounded-full text-sm font-medium"
              >Business Name Success Story</span
            >
          </div>
          <h2
            class="text-2xl sm:text-3xl md:text-4xl font-bold text-gray-900 mb-4 leading-tight"
          >
            Lorem Ipsum<br />Headline Placeholder
          </h2>
          <p class="text-gray-500 text-base sm:text-lg mb-4 max-w-lg">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
            eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim
            ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
            aliquip ex ea commodo consequat.
          </p>
          <p class="text-gray-500 text-sm sm:text-base mb-8 max-w-lg">
            Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat
            cupidatat non proident, sunt in culpa qui officia deserunt mollit
            anim id est laborum.
          </p>
          <!-- Image: mobile only, after paragraphs, before cards/button -->
          <div class="block md:hidden mb-8">
            <img
              src="assets/cybericon2.webp"
              alt="Cybersecurity"
              class="w-full max-w-xs sm:max-w-sm rounded-xl shadow-lg object-cover mx-auto"
            />
          </div>
          <div class="flex flex-col sm:flex-row gap-4 mb-8">
            <div
              class="flex-1 bg-gray-100 rounded-xl shadow px-6 py-6 flex flex-col items-center justify-center"
            >
              <div class="text-2xl font-bold text-gray-900 mb-1">100%</div>
              <div class="text-gray-500 text-xs sm:text-sm text-center">
                Compliance lorem ipsum
              </div>
            </div>
            <div
              class="flex-1 bg-gray-100 rounded-xl shadow px-6 py-6 flex flex-col items-center justify-center"
            >
              <div class="text-2xl font-bold text-gray-900 mb-1">75%</div>
              <div class="text-gray-500 text-xs sm:text-sm text-center">
                Reduced Cost lorem ipsum
              </div>
            </div>
          </div>
          <div class="mb-8">
            <a
              href="book_a_free_consultation.html"
              class="inline-block bg-[#FFF455] hover:bg-[#FFE066] text-black font-semibold px-10 py-2 rounded-full shadow-lg transition-all duration-300"
              >Contact Us</a
            >
          </div>
        </div>
      </div>
    </section>

    <!-- Testimonials Slider Section -->
    <section class="bg-[#02B578] text-white py-16 md:py-24">
      <div class="max-w-5xl mx-auto px-6 sm:px-8 lg:px-10 relative">
        <div class="testimonial-carousel owl-carousel owl-theme">
          <!-- Slide 1 -->
          <div class="item">
            <div class="text-center max-w-3xl mx-auto">
              <div class="flex justify-center">
                <div
                  class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/10"
                >
                  <span class="text-3xl leading-none">“</span>
                </div>
              </div>
              <p class="mt-6 text-white/95 leading-8">
                The ongoing security awareness campaigns have greatly improved
                our staff's understanding of cybersecurity, drastically reducing
                phishing incidents. The regular third-party assessments give us
                peace of mind, ensuring our systems stay secure and aligned with
                best practices. Cliffside Cybersecurity support has been
                invaluable in strengthening our cybersecurity posture.
              </p>
              <div class="mt-8 flex flex-col items-center gap-2">
                <img
                  src="assets/DirectorHashicorp.webp"
                  alt="Director"
                  class="director-avatar"
                />
                <div class="text-[13px] md:text-sm font-semibold">
                  Business Operations Director
                </div>
                <div class="text-[11px] md:text-xs opacity-90">
                  International HR Organisation
                </div>
                <img
                  src="assets/HashiCorp.webp"
                  alt="HashiCorp"
                  class="company-logo mt-4"
                />
              </div>
            </div>
          </div>

          <!-- Slide 2 -->
          <div class="item">
            <div class="text-center max-w-3xl mx-auto">
              <div class="flex justify-center">
                <div
                  class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/10"
                >
                  <span class="text-3xl leading-none">“</span>
                </div>
              </div>
              <p class="mt-6 text-white/95 leading-8">
                Cliffside identified several hidden risks and helped us
                prioritise remediation without disrupting operations. Their
                practical approach and clear communication made a measurable
                difference to our security posture.
              </p>
              <div class="mt-8 flex flex-col items-center gap-2">
                <img
                  src="assets/DirectorHashicorp.webp"
                  alt="Director"
                  class="director-avatar"
                />
                <div class="text-[13px] md:text-sm font-semibold">
                  Technology Lead
                </div>
                <div class="text-[11px] md:text-xs opacity-90">
                  FinTech Company
                </div>
                <img
                  src="assets/HashiCorp.webp"
                  alt="HashiCorp"
                  class="company-logo mt-4"
                />
              </div>
            </div>
          </div>

          <!-- Slide 3 -->
          <div class="item">
            <div class="text-center max-w-3xl mx-auto">
              <div class="flex justify-center">
                <div
                  class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/10"
                >
                  <span class="text-3xl leading-none">“</span>
                </div>
              </div>
              <p class="mt-6 text-white/95 leading-8">
                Their penetration testing and follow-up assurance gave us clear,
                actionable insights. We fixed high-risk issues quickly and
                improved our compliance readiness ahead of schedule.
              </p>
              <div class="mt-8 flex flex-col items-center gap-2">
                <img
                  src="assets/DirectorHashicorp.webp"
                  alt="Director"
                  class="director-avatar"
                />
                <div class="text-[13px] md:text-sm font-semibold">
                  Head of IT Security
                </div>
                <div class="text-[11px] md:text-xs opacity-90">
                  Healthcare Provider
                </div>
                <img
                  src="assets/HashiCorp.webp"
                  alt="HashiCorp"
                  class="company-logo mt-4"
                />
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Footer -->
    <?php
include __DIR__ . '/includes/footer.php';
?>

    <!-- jQuery + Owl Carousel (CDN) -->
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
      defer
    ></script>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
      defer
    ></script>
    <script src="script.js" defer></script>
  </body>
</html>
