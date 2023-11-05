<div class="modal fade p-0" id="playVideo" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-fullscreen">
    <div class="modal-content position-relative">
      <div class="modal-body">
        <button type="button" id="JsModalClose" class="btn css-modal-close-btn position-absolute z-3" data-bs-dismiss="modal" aria-label="Close">
          <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 48 48" fill="none">
            <g filter="url(#filter0_b_15_4871)">
              <circle cx="24" cy="24" r="24" fill="#FCFCFC"/>
            </g>
            <path d="M18.375 29.6245L29.625 18.3745" stroke="#111E26" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            <path d="M29.625 29.6245L18.375 18.3745" stroke="#111E26" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            <defs>
              <filter id="filter0_b_15_4871" x="-8" y="-8" width="64" height="64" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                <feGaussianBlur in="BackgroundImageFix" stdDeviation="4"/>
                <feComposite in2="SourceAlpha" operator="in" result="effect1_backgroundBlur_15_4871"/>
                <feBlend mode="normal" in="SourceGraphic" in2="effect1_backgroundBlur_15_4871" result="shape"/>
              </filter>
            </defs>
          </svg>
        </button>

        <div id="jsVideoContainer" class="rounded-5 overflow-hidden h-100"></div>
      </div>
    </div>
  </div>
</div>
