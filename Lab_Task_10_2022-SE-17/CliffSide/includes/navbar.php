<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>

    <div
      id="mobile-sidebar-overlay"
      class="fixed inset-0 bg-black bg-opacity-50 z-50 hidden transition-opacity duration-300 md:hidden"
    ></div>

    <div
      id="mobile-sidebar"
      class="fixed top-0 left-0 h-full w-80 bg-white shadow-xl z-50 transform -translate-x-full transition-transform duration-300 ease-in-out md:hidden overflow-y-auto"
    >
      <!-- Sidebar Header -->
      <div
        class="flex items-center justify-between p-6 border-b border-gray-200"
      >
        <div class="flex items-center gap-3">
          <img
            src="assets/Group.webp"
            alt="Cliffside Icon"
            class="h-8 w-auto object-contain"
            loading="lazy"
          />
          <img
            src="assets/CliffsideLogo.webp"
            alt="Cliffside Logo"
            class="h-5 w-auto object-contain"
            loading="lazy"
          />
        </div>
        <button
          id="mobile-sidebar-close"
          class="p-2 rounded-lg hover:bg-gray-100 transition-colors"
        >
          <svg
            class="h-6 w-6 text-gray-600"
            fill="none"
            viewBox="0 0 24 24"
            stroke="currentColor"
          >
            <path
              stroke-linecap="round"
              stroke-linejoin="round"
              stroke-width="2"
              d="M6 18L18 6M6 6l12 12"
            />
          </svg>
        </button>
      </div>

      <!-- Navigation Menu -->
      <div class="p-6">
        <nav class="space-y-6">
          <!-- How We Work -->
          <a
            href="OurWork.php"
            class="block text-gray-900 font-medium text-base hover:text-[#02B578] transition-colors py-2"
          >
            How We Work
          </a>

          <!-- Services Dropdown -->
          <div class="space-y-2">
            <button
              id="mobile-services-toggle"
              class="flex items-center justify-between w-full text-gray-900 font-medium text-base hover:text-[#02B578] transition-colors py-2"
            >
              Services
              <svg
                id="mobile-services-chevron"
                class="h-5 w-5 text-gray-500 transition-transform duration-200"
                fill="none"
                viewBox="0 0 24 24"
                stroke="currentColor"
              >
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  d="M19 9l-7 7-7-7"
                />
              </svg>
            </button>
            <div
              id="mobile-services-menu"
              class="hidden pl-4 space-y-3 border-l-2 border-gray-100"
            >
              <a
                href="#"
                class="block text-gray-600 hover:text-[#02B578] transition-colors py-1 text-sm"
              >
                Security Assessment
              </a>
              <a
                href="#"
                class="block text-gray-600 hover:text-[#02B578] transition-colors py-1 text-sm"
              >
                Penetration Testing
              </a>
              <a
                href="#"
                class="block text-gray-600 hover:text-[#02B578] transition-colors py-1 text-sm"
              >
                Compliance Consulting
              </a>
              <a
                href="#"
                class="block text-gray-600 hover:text-[#02B578] transition-colors py-1 text-sm"
              >
                Incident Response
              </a>
              <a
                href="#"
                class="block text-gray-600 hover:text-[#02B578] transition-colors py-1 text-sm"
              >
                Cybersecurity Advisory
              </a>
              <a
                href="#"
                class="block text-gray-600 hover:text-[#02B578] transition-colors py-1 text-sm"
              >
                Security Architecture
              </a>
              <a
                href="#"
                class="block text-gray-600 hover:text-[#02B578] transition-colors py-1 text-sm"
              >
                Cloud Security
              </a>
              <a
                href="#"
                class="block text-gray-600 hover:text-[#02B578] transition-colors py-1 text-sm"
              >
                Security Awareness
              </a>
            </div>
          </div>

          <!-- Industries Dropdown -->
          <div class="space-y-2">
            <button
              id="mobile-industries-toggle"
              class="flex items-center justify-between w-full text-gray-900 font-medium text-base hover:text-[#02B578] transition-colors py-2"
            >
              Industries
              <svg
                id="mobile-industries-chevron"
                class="h-5 w-5 text-gray-500 transition-transform duration-200"
                fill="none"
                viewBox="0 0 24 24"
                stroke="currentColor"
              >
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  d="M19 9l-7 7-7-7"
                />
              </svg>
            </button>
            <div
              id="mobile-industries-menu"
              class="hidden pl-4 space-y-3 border-l-2 border-gray-100"
            >
              <a
                href="Carreer_at_cliffside.php"
                class="block text-gray-600 hover:text-[#02B578] transition-colors py-1 text-sm"
              >
                Carreer at CliffSide
              </a>
              <a
                href="our_Success_stories.php"
                class="block text-gray-600 hover:text-[#02B578] transition-colors py-1 text-sm"
              >
                Our Success Stories
              </a>
              <a
                href="#"
                class="block text-gray-600 hover:text-[#02B578] transition-colors py-1 text-sm"
              >
                Technology
              </a>
              <a
                href="#"
                class="block text-gray-600 hover:text-[#02B578] transition-colors py-1 text-sm"
              >
                Manufacturing
              </a>
              <a
                href="#"
                class="block text-gray-600 hover:text-[#02B578] transition-colors py-1 text-sm"
              >
                Retail
              </a>
              <a
                href="#"
                class="block text-gray-600 hover:text-[#02B578] transition-colors py-1 text-sm"
              >
                Government
              </a>
              <a
                href="#"
                class="block text-gray-600 hover:text-[#02B578] transition-colors py-1 text-sm"
              >
                Education
              </a>
            </div>
          </div>

          <!-- Additional Navigation Links -->
          <div class="pt-4 border-t border-gray-200 space-y-4">
            <a
              href="#"
              class="block text-gray-900 font-medium text-base hover:text-[#02B578] transition-colors py-2"
            >
              Case Studies
            </a>
            <a
              href="#"
              class="block text-gray-900 font-medium text-base hover:text-[#02B578] transition-colors py-2"
            >
              Blog
            </a>
            <a
              href="#"
              class="block text-gray-900 font-medium text-base hover:text-[#02B578] transition-colors py-2"
            >
              About Us
            </a>
            <a
              href="#"
              class="block text-gray-900 font-medium text-base hover:text-[#02B578] transition-colors py-2"
            >
              Contact
            </a>
          </div>

          <!-- CTA Button -->
          <div class="pt-6">
            <button
              class="w-full bg-[#02B578] hover:bg-[#02B578]/90 text-white font-semibold px-6 py-3 rounded-full transition-all duration-300 shadow-lg hover:shadow-xl"
            >
              <a href="book_a_free_consultation.php">Book Free Consultation</a>
            </button>
          </div>

          <!-- Contact Information -->
          <div class="pt-6 border-t border-gray-200 space-y-4">
            <div class="flex items-center gap-3">
              <div
                class="w-10 h-10 bg-[#02B578]/10 rounded-lg flex items-center justify-center"
              >
                <svg
                  class="w-5 h-5 text-[#02B578]"
                  fill="currentColor"
                  viewBox="0 0 24 24"
                >
                  <path
                    d="M6.62 10.79c1.44 2.83 3.76 5.14 6.59 6.59l2.2-2.2c.27-.27.67-.36 1.02-.24 1.12.37 2.33.57 3.57.57.55 0 1 .45 1 1V20c0 .55-.45 1-1 1-9.39 0-17-7.61-17-17 0-.55.45-1 1-1h3.5c.55 0 1 .45 1 1 0 1.25.2 2.45.57 3.57.11.35.03.74-.25 1.02l-2.2 2.2z"
                  />
                </svg>
              </div>
              <div>
                <p class="text-sm font-medium text-gray-900">(02) 8916 6389</p>
                <p class="text-xs text-gray-500">Call us directly</p>
              </div>
            </div>

            <div class="flex items-center gap-3">
              <div
                class="w-10 h-10 bg-[#02B578]/10 rounded-lg flex items-center justify-center"
              >
                <svg
                  class="w-5 h-5 text-[#02B578]"
                  fill="currentColor"
                  viewBox="0 0 24 24"
                >
                  <path
                    d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z"
                  />
                </svg>
              </div>
              <div>
                <p class="text-sm font-medium text-gray-900">
                  Sydney, Australia
                </p>
                <p class="text-xs text-gray-500">Level 1, 66 King Street</p>
              </div>
            </div>
          </div>
        </nav>
      </div>
    </div>

    <!-- Single NavBar Display with Dropdown -->
    <nav class="bg-white shadow-sm border-b border-gray-100 sticky top-0 z-40">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="relative flex items-center justify-between h-[100px]">
          <!-- Left Section: Logo -->
          <div class="flex-shrink-0 flex items-center gap-4">
            <img
              src="assets/Group.webp"
              alt="Cliffside Icon"
              class="h-[48px] w-auto object-contain"
              loading="lazy"
            />
            <a href="index.php" class="block">
              <img
                src="assets/CliffsideLogo.webp"
                alt="Cliffside Logo"
                class="h-[25px] w-auto object-contain"
                loading="lazy"
              />
            </a>
          </div>

          <!-- Center Section: Desktop Navigation -->
          <div
            class="hidden md:flex absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2"
          >
            <div class="flex items-baseline space-x-8">
              <a
                href="OurWork.php"
                class="text-black hover:text-gray-900 px-3 py-2 text-sm font-medium transition-colors duration-200 font-[var(--main-font)]"
              >
                How We Work
              </a>
              <!-- Services Dropdown -->
              <div class="relative group">
                <button
                  class="text-black hover:text-gray-900 px-3 py-2 text-sm font-medium transition-colors duration-200 flex items-center font-[var(--main-font)]"
                >
                  Services
                  <svg
                    class="ml-1 h-4 w-4 transition-transform duration-200 group-hover:rotate-180"
                    fill="none"
                    stroke="currentColor"
                    viewBox="0 0 24 24"
                  >
                    <path
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      stroke-width="2"
                      d="M19 9l-7 7-7-7"
                    ></path>
                  </svg>
                </button>
                <div
                  class="absolute left-0 mt-2 w-48 bg-white rounded-md shadow-lg opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-200 z-50 border border-gray-200"
                >
                  <div class="py-1">
                    <a
                      href="#"
                      class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 transition-colors duration-150"
                      >Security Assessment</a
                    >
                    <a
                      href="#"
                      class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 transition-colors duration-150"
                      >Penetration Testing</a
                    >
                    <a
                      href="#"
                      class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 transition-colors duration-150"
                      >Compliance Consulting</a
                    >
                    <a
                      href="#"
                      class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 transition-colors duration-150"
                      >Incident Response</a
                    >
                  </div>
                </div>
              </div>
              <!-- Industries Dropdown -->
              <div class="relative group">
                <button
                  class="text-black hover:text-gray-900 px-3 py-2 text-sm font-medium transition-colors duration-200 flex items-center font-[var(--main-font)]"
                >
                  Industries
                  <svg
                    class="ml-1 h-4 w-4 transition-transform duration-200 group-hover:rotate-180"
                    fill="none"
                    stroke="currentColor"
                    viewBox="0 0 24 24"
                  >
                    <path
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      stroke-width="2"
                      d="M19 9l-7 7-7-7"
                    ></path>
                  </svg>
                </button>
                <div
                  class="absolute left-0 mt-2 w-48 bg-white rounded-md shadow-lg opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-200 z-50 border border-gray-200"
                >
                  <div class="py-1">
                    <a
                      href="Carreer_at_cliffside.php"
                      class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 transition-colors duration-150"
                      >Carreer at CliffSide</a
                    >
                    <a
                      href="our_Success_stories.php"
                      class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 transition-colors duration-150"
                      >Our Success Stories</a
                    >
                    <a
                      href="#"
                      class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 transition-colors duration-150"
                      >Technology</a
                    >
                    <a
                      href="#"
                      class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 transition-colors duration-150"
                      >Manufacturing</a
                    >
                    <a
                      href="#"
                      class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 transition-colors duration-150"
                      >Retail</a
                    >
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Right Section: CTA and Mobile Menu Button -->
          <div class="flex items-center">
            <!-- Desktop CTA -->
            <div class="hidden md:block ml-4">
              <button
                class="bg-transparent border border-gray-900 text-gray-900 hover:bg-gray-900 hover:text-white px-6 py-2 rounded-full text-sm font-medium transition-all duration-200"
              >
                <a href="book_a_free_consultation.php">Book Free Consultation</a>
              </button>
            </div>
            <!-- Mobile menu button -->
            <div class="md:hidden flex items-center">
              <button
                id="mobile-sidebar-toggle"
                class="p-2 rounded-lg text-gray-700 hover:text-gray-900 hover:bg-gray-100 focus:outline-none transition-colors"
                aria-label="Toggle mobile menu"
              >
                <svg
                  class="h-6 w-6"
                  fill="none"
                  viewBox="0 0 24 24"
                  stroke="currentColor"
                >
                  <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="2"
                    d="M4 6h16M4 12h16M4 18h16"
                  />
                </svg>
              </button>
            </div>
          </div>
        </div>
      </div>
    </nav>
  
</body>
</html>