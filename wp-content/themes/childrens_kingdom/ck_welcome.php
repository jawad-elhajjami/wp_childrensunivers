<?php 
/* Template Name: CK welcome */

?>
<meta content="width=device-width, initial-scale=1" name="viewport" />
<link href="<?php echo get_stylesheet_uri(); ?>" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="<?php echo site_url() . '/wp-content/themes/childrens_kingdom/js/childrens_kingdom.js'?>"></script>
<main class="coming-soon-main ck-welcome">
    <div class="coming-soon-wrapper">
        <div class="coming-soon-header">
            <?php echo get_custom_logo();?>
            <div class="lng-sn-container">
                <?php do_action('wpml_add_language_selector'); ?>
                <div class="sn-icons">
                    <a href="https://www.facebook.com/Childrens-Kingdom-101807249103095" target="_blank">
                        <svg width="10" height="18" viewBox="0 0 10 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M9.10362 10.125L9.6088 6.86742H6.45016V4.75348C6.45016 3.86227 6.8914 2.99355 8.30605 2.99355H9.74203V0.220078C9.74203 0.220078 8.43892 0 7.19301 0C4.59178 0 2.89149 1.56023 2.89149 4.38469V6.86742H0V10.125H2.89149V18H6.45016V10.125H9.10362Z" fill="white"/>
                        </svg>
                    </a>
                    <a href="https://www.instagram.com/childrenskingdom.ma/" target="_blank">
                        <svg width="20" height="18" viewBox="0 0 20 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M9.97482 4.38503C7.28647 4.38503 5.11804 6.4455 5.11804 9C5.11804 11.5545 7.28647 13.615 9.97482 13.615C12.6632 13.615 14.8316 11.5545 14.8316 9C14.8316 6.4455 12.6632 4.38503 9.97482 4.38503ZM9.97482 12.0003C8.23754 12.0003 6.81728 10.6548 6.81728 9C6.81728 7.3452 8.23331 5.99967 9.97482 5.99967C11.7163 5.99967 13.1324 7.3452 13.1324 9C13.1324 10.6548 11.7121 12.0003 9.97482 12.0003ZM16.1631 4.19625C16.1631 4.79471 15.6559 5.27268 15.0303 5.27268C14.4005 5.27268 13.8974 4.79069 13.8974 4.19625C13.8974 3.60181 14.4047 3.11983 15.0303 3.11983C15.6559 3.11983 16.1631 3.60181 16.1631 4.19625ZM19.3798 5.28874C19.308 3.84681 18.9613 2.56956 17.8497 1.51724C16.7422 0.464911 15.398 0.135557 13.8805 0.0632601C12.3166 -0.0210867 7.62886 -0.0210867 6.06488 0.0632601C4.55163 0.131541 3.20745 0.460895 2.09576 1.51322C0.984068 2.56555 0.641683 3.8428 0.565598 5.28473C0.476832 6.77084 0.476832 11.2251 0.565598 12.7113C0.637457 14.1532 0.984068 15.4304 2.09576 16.4828C3.20745 17.5351 4.5474 17.8644 6.06488 17.9367C7.62886 18.0211 12.3166 18.0211 13.8805 17.9367C15.398 17.8685 16.7422 17.5391 17.8497 16.4828C18.9571 15.4304 19.3037 14.1532 19.3798 12.7113C19.4686 11.2251 19.4686 6.77485 19.3798 5.28874ZM17.3593 14.3058C17.0296 15.093 16.3914 15.6995 15.5586 16.0168C14.3117 16.4868 11.3528 16.3783 9.97482 16.3783C8.59683 16.3783 5.63373 16.4828 4.391 16.0168C3.56252 15.7036 2.92424 15.0971 2.59031 14.3058C2.09576 13.1209 2.20989 10.3094 2.20989 9C2.20989 7.69062 2.09999 4.87504 2.59031 3.69419C2.92002 2.90695 3.55829 2.30046 4.391 1.98315C5.63796 1.51322 8.59683 1.62167 9.97482 1.62167C11.3528 1.62167 14.3159 1.51724 15.5586 1.98315C16.3871 2.29644 17.0254 2.90293 17.3593 3.69419C17.8539 4.87906 17.7398 7.69062 17.7398 9C17.7398 10.3094 17.8539 13.125 17.3593 14.3058Z" fill="white"/>
                        </svg>
                    </a>
                </div> 
            </div>
            <?php //do_action('wpml_add_language_selector');?>
        </div>
        <div class="coming-soon-body">
                <h1><?php echo __("See you soon", "childrens_kingdom")?></h1>
                <p><?php echo __("We will sent you an email to inform you of the opening of our kingdom.<br>Thank you !!", "childrens_kingdom")?></p>
            <!--<form class="coming-soon-form">
                <input type="text" placeholder="Email Adresse">
                <input type="submit" value="NOTIFY ME">
            </form>-->
            <svg class="svg-1" width="105" height="82" viewBox="0 0 105 82" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M67.1514 75.6931C65.0696 75.1352 62.9591 74.5276 60.9377 73.9018C60.8591 73.8808 60.8199 73.8702 60.7413 73.8492C60.6627 73.8281 60.6235 73.8176 60.5449 73.7966C60.1128 73.6808 59.7727 73.3791 59.5819 72.9912C59.3912 72.6034 59.3393 72.1685 59.4551 71.7364C59.7259 70.8828 60.6118 70.4045 61.4654 70.6753C61.544 70.6964 61.5833 70.7069 61.6513 70.7672C61.7299 70.7883 61.7691 70.7988 61.8477 70.8199C63.8298 71.4352 65.9011 72.0323 67.9435 72.5795C68.6898 72.7795 69.4754 72.99 70.3395 73.2215L70.3788 73.2321C71.2429 73.4636 71.7605 74.3601 71.5395 75.1849C71.3079 76.049 70.4508 76.5771 69.5866 76.3456C68.7723 76.0853 67.9762 75.9141 67.1514 75.6931Z" fill="#EFF3F6"/>
                <path d="M78.272 78.3359C77.4472 78.1149 76.9191 77.2577 77.1008 76.4224C77.2931 75.5477 78.1608 74.9803 79.0354 75.1726C79.114 75.1937 79.1533 75.2042 79.2318 75.2252C79.3104 75.2463 79.3497 75.2568 79.4387 75.2386C82.2696 75.8287 85.2001 76.3613 88.141 76.8547C89.0262 77.0077 89.6041 77.8361 89.4511 78.7213C89.3746 79.1638 89.1516 79.5251 88.7924 79.7656C88.4333 80.0062 88.0271 80.1078 87.5845 80.0313C84.6043 79.5275 81.6345 78.9843 78.7644 78.3837C78.6858 78.3626 78.6466 78.3521 78.568 78.331C78.4895 78.31 78.4502 78.2995 78.3611 78.3177C78.3113 78.3464 78.272 78.3359 78.272 78.3359Z" fill="#EFF3F6"/>
                <path d="M52.1787 70.9227C52.1394 70.9122 52.1001 70.9017 52.0215 70.8806C49.1101 69.8058 46.3375 68.684 43.6645 67.5047C43.5859 67.4837 43.5572 67.4339 43.4786 67.4128C43.4001 67.3918 43.3608 67.3812 43.2822 67.3602C42.4497 67.0108 42.1208 66.0386 42.4702 65.2061C42.809 64.4128 43.7917 64.0446 44.6243 64.394C44.7028 64.4151 44.7316 64.4649 44.8102 64.4859C44.8887 64.507 44.928 64.5175 45.0065 64.5385C47.601 65.6968 50.3343 66.8081 53.1672 67.8618C54.0103 68.1719 54.4388 69.0866 54.1287 69.9297C53.8291 70.7335 53.0035 71.1437 52.1787 70.9227Z" fill="#EFF3F6"/>
                <path d="M35.6037 63.492C35.4858 63.4604 35.368 63.4288 35.2607 63.358C32.5043 61.8616 29.8972 60.279 27.5076 58.6704C27.4396 58.6101 27.4003 58.5996 27.3323 58.5393C27.2537 58.5182 27.225 58.4684 27.1464 58.4474C26.3953 57.9514 26.2053 56.9322 26.7405 56.1916C27.1446 55.6263 27.8495 55.3521 28.5173 55.531C28.7136 55.5836 28.8602 55.665 29.0068 55.7464C29.0854 55.7674 29.1141 55.8172 29.1822 55.8775C29.2214 55.8881 29.2895 55.9484 29.368 55.9695C31.6503 57.5072 34.1788 59.0687 36.8279 60.4942C37.1996 60.678 37.4795 61.0477 37.6204 61.4643C37.7221 61.8705 37.6849 62.3236 37.5011 62.6953C37.0654 63.3785 36.3107 63.6814 35.6037 63.492Z" fill="#EFF3F6"/>
                <path d="M20.6473 53.1709C20.4116 53.1077 20.1472 52.9948 19.9824 52.8243C17.5437 50.6132 15.4509 48.3685 13.7537 46.0614C13.7249 46.0116 13.6569 45.9513 13.6282 45.9015C13.5994 45.8517 13.5314 45.7914 13.5026 45.7416C13.2621 45.3824 13.1604 44.9763 13.1976 44.5232C13.2741 44.0806 13.4972 43.7194 13.8563 43.4788C14.2653 43.2095 14.7605 43.0896 15.2318 43.2159C15.5853 43.3106 15.9073 43.5232 16.1191 43.8325C16.1478 43.8823 16.1766 43.9322 16.2446 43.9925C16.2733 44.0423 16.3414 44.1026 16.3701 44.1524C17.9523 46.2603 19.9091 48.3844 22.1724 50.4642C22.4733 50.7554 22.664 51.1433 22.7159 51.5781C22.7285 52.0025 22.5734 52.424 22.3216 52.7354C21.8313 53.1513 21.2365 53.3287 20.6473 53.1709Z" fill="#EFF3F6"/>
                <path d="M10.271 38.4771C9.7211 38.3298 9.32343 37.9286 9.12498 37.4123C8.7961 36.4401 8.5563 35.4497 8.40558 34.441C7.99966 32.1853 7.90796 30.0137 8.08068 27.955C8.10173 27.8765 8.12278 27.7979 8.09403 27.7481C8.11508 27.6696 8.1256 27.6303 8.10737 27.5412C8.13406 27.1274 8.36767 26.7269 8.69806 26.4365C9.02845 26.1462 9.47385 26.055 9.88769 26.0817C10.7441 26.1849 11.4111 26.9951 11.3079 27.8515C11.2974 27.8908 11.2763 27.9693 11.2553 28.0479C11.2448 28.0872 11.263 28.1763 11.2525 28.2155L11.2419 28.2548C11.0748 29.9782 11.2009 31.8643 11.5234 33.803C11.677 34.644 11.8698 35.4956 12.1517 36.3289C12.2926 36.7455 12.2554 37.1986 12.0323 37.5598C11.8485 37.9316 11.5181 38.2219 11.1015 38.3629C10.8812 38.5565 10.5852 38.5613 10.271 38.4771Z" fill="#EFF3F6"/>
                <path d="M12.447 21.0839C12.2506 21.0312 12.104 20.9499 11.9287 20.8187C11.578 20.5563 11.3375 20.1972 11.2856 19.7623C11.2337 19.3274 11.3102 18.8848 11.5621 18.5734C13.2597 16.1656 15.604 14.0153 18.5347 12.1904C18.5845 12.1617 18.6343 12.1329 18.7339 12.0754C18.7837 12.0467 18.844 11.9786 18.8938 11.9499C19.2922 11.7199 19.7271 11.668 20.1592 11.7838C20.552 11.889 20.9026 12.1514 21.1432 12.5105C21.3838 12.8697 21.4356 13.3045 21.3199 13.7366C21.2041 14.1687 20.9417 14.5193 20.5931 14.7206C20.5433 14.7494 20.4935 14.7781 20.4437 14.8069C20.3939 14.8356 20.3441 14.8644 20.2838 14.9324C17.7122 16.5167 15.6878 18.416 14.2132 20.4626C13.7804 20.9781 13.0755 21.2522 12.447 21.0839Z" fill="#EFF3F6"/>
                <path d="M27.4189 11.2445C26.9083 11.1077 26.4713 10.6959 26.3121 10.1902C26.0302 9.35685 26.4897 8.42752 27.323 8.14562C30.0011 7.26347 32.9829 6.5048 36.1793 5.88783C36.2684 5.8696 36.3077 5.88012 36.3967 5.8619C36.4465 5.83314 36.5356 5.81491 36.5749 5.82544C36.8029 5.76022 37.0491 5.78409 37.2847 5.84724C37.8739 6.00511 38.3291 6.50596 38.4567 7.12953C38.5478 7.57493 38.4426 7.96772 38.1802 8.3184C37.9571 8.67961 37.5587 8.90964 37.1526 9.01131C37.1028 9.04007 37.0242 9.01902 36.9352 9.03725C36.8854 9.066 36.7963 9.08423 36.757 9.0737C33.6995 9.64369 30.8959 10.3659 28.3461 11.2404C28.0291 11.3238 27.7331 11.3287 27.4189 11.2445Z" fill="#EFF3F6"/>
            </svg>
            
            <svg class="svg-2" width="178" height="153" viewBox="0 0 178 153" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M116.474 87.3115C118.876 85.4869 121.197 83.6225 123.406 81.7427C123.47 81.6941 123.502 81.6698 123.542 81.5891C123.606 81.5404 123.638 81.5161 123.702 81.4674C124.03 81.1678 124.221 80.8207 124.25 80.3942C124.28 79.9677 124.165 79.5501 123.865 79.2221C123.298 78.5418 122.276 78.4596 121.595 79.0268C121.531 79.0755 121.499 79.0998 121.46 79.1805C121.427 79.2048 121.363 79.2535 121.299 79.3022C119.155 81.1333 116.865 82.9733 114.495 84.7736C113.791 85.3088 113.652 86.3233 114.187 87.0279C114.755 87.7082 115.769 87.8467 116.474 87.3115Z" fill="#EFF3F6"/>
                <path d="M109.338 92.4809C110.01 91.97 110.173 90.9876 109.694 90.2907C109.459 89.914 109.087 89.6911 108.669 89.6051C108.25 89.5192 107.832 89.6344 107.456 89.87C107.392 89.9186 107.359 89.943 107.295 89.9916C107.263 90.0159 107.199 90.0646 107.135 90.1133L107.103 90.1376C104.788 91.7445 102.329 93.3604 99.8447 94.9442C99.0914 95.4154 98.8965 96.4221 99.3433 97.1433C99.5789 97.52 99.9183 97.7672 100.337 97.8532C100.756 97.9391 101.166 97.8803 101.542 97.6447C104.058 96.0365 106.55 94.3963 108.953 92.7728C109.018 92.7241 109.05 92.6998 109.114 92.6511C109.178 92.6025 109.21 92.5782 109.274 92.5295C109.306 92.5052 109.338 92.4809 109.338 92.4809Z" fill="#EFF3F6"/>
                <path d="M130.182 75.6382C130.214 75.6138 130.278 75.5652 130.342 75.5165C132.525 73.4036 134.628 71.251 136.529 69.0996C136.593 69.051 136.601 68.9946 136.665 68.946C136.729 68.8973 136.761 68.873 136.8 68.7923C137.376 68.1533 137.345 67.1158 136.65 66.5328C136.06 66.0216 135.231 65.9945 134.622 66.4567C134.526 66.5297 134.462 66.5784 134.39 66.6834C134.326 66.732 134.319 66.7884 134.255 66.837C134.223 66.8614 134.159 66.91 134.119 66.9907L134.087 67.0151C132.225 69.0858 130.219 71.1654 128.1 73.2296C127.468 73.861 127.45 74.8344 128.049 75.4904C128.632 76.0579 129.541 76.1248 130.182 75.6382Z" fill="#EFF3F6"/>
                <path d="M94.1526 102.145C94.7932 101.659 94.9727 100.765 94.5823 100.051C94.3467 99.6746 94.0073 99.4273 93.6205 99.317C93.2017 99.2311 92.7674 99.2579 92.3908 99.4935C92.3268 99.5422 92.2947 99.5665 92.2307 99.6151C92.1986 99.6395 92.1103 99.6561 92.0462 99.7048C89.5853 101.12 87.004 102.575 84.3984 103.999C84.3343 104.048 84.2702 104.096 84.2062 104.145C83.5656 104.631 83.3938 105.469 83.7843 106.183C83.9635 106.552 84.3272 106.831 84.7383 106.973C85.1494 107.115 85.5914 107.032 85.9603 106.853C88.598 105.405 91.1793 103.949 93.6722 102.51C93.7363 102.462 93.7683 102.437 93.8324 102.389C93.8964 102.34 93.9528 102.348 94.0168 102.299C94.0566 102.218 94.0886 102.194 94.1526 102.145Z" fill="#EFF3F6"/>
                <path d="M78.3345 110.776C78.943 110.314 79.1469 109.452 78.7807 108.771C78.6015 108.402 78.2698 108.098 77.8587 107.956C77.4476 107.814 77.0134 107.84 76.6124 108.044C76.5483 108.093 76.5163 108.117 76.4523 108.166C76.3882 108.214 76.3318 108.206 76.2678 108.255C73.7416 109.517 71.095 110.821 68.392 112.116C68.296 112.189 68.2076 112.206 68.1115 112.279C67.503 112.741 67.3068 113.547 67.6409 114.253C67.8201 114.622 68.1518 114.925 68.563 115.067C68.9741 115.21 69.4083 115.183 69.7772 115.004C72.4802 113.708 75.1588 112.381 77.717 111.094C77.7811 111.045 77.8131 111.021 77.9015 111.004C77.9899 110.988 78.0219 110.963 78.0859 110.915C78.2064 110.874 78.2704 110.825 78.3345 110.776Z" fill="#EFF3F6"/>
                <path d="M142.093 62.1943C142.221 62.097 142.349 61.9997 142.397 61.8626C144.224 59.414 145.89 56.886 147.322 54.3835C147.362 54.3029 147.394 54.2785 147.434 54.1978C147.498 54.1492 147.505 54.0928 147.545 54.0122C147.768 53.6408 147.798 53.2142 147.683 52.7966C147.567 52.379 147.3 52.0267 146.953 51.8358C146.396 51.5014 145.696 51.578 145.184 51.9673C145.024 52.0889 144.888 52.2426 144.776 52.4283C144.769 52.4847 144.705 52.5333 144.697 52.5897C144.665 52.614 144.625 52.6947 144.585 52.7754C143.168 55.1651 141.574 57.5881 139.843 59.9637C139.316 60.6668 139.467 61.6634 140.17 62.19C140.744 62.6128 141.549 62.6079 142.093 62.1943Z" fill="#EFF3F6"/>
                <path d="M62.1175 118.551C62.726 118.089 62.9222 117.283 62.6124 116.609C62.2616 115.815 61.31 115.427 60.4838 115.802C60.4197 115.85 60.3634 115.843 60.2993 115.891C60.2109 115.908 60.1789 115.932 60.1148 115.981C57.5157 117.147 54.7961 118.354 52.0842 119.505C51.9638 119.546 51.8677 119.619 51.7396 119.716C51.1631 120.154 50.9426 120.928 51.2204 121.626C51.3676 122.019 51.6992 122.323 52.0783 122.49C52.4574 122.656 52.916 122.661 53.2849 122.482C55.9968 121.331 58.7164 120.124 61.404 118.941C61.468 118.893 61.5244 118.9 61.5884 118.852C61.6448 118.859 61.7088 118.811 61.7729 118.762C61.901 118.665 62.0214 118.624 62.1175 118.551Z" fill="#EFF3F6"/>
                <path d="M151.08 46.6311C151.304 46.4608 151.48 46.2264 151.599 45.9844C152.764 43.1296 153.735 40.2197 154.41 37.384C154.418 37.3277 154.425 37.2713 154.465 37.1907C154.473 37.1343 154.512 37.0536 154.52 36.9973C154.606 36.5784 154.547 36.1685 154.312 35.7919C154.076 35.4153 153.737 35.168 153.318 35.0821C152.843 34.9884 152.369 35.0959 152.016 35.3635C151.728 35.5825 151.481 35.9219 151.403 36.2843C151.395 36.3407 151.387 36.397 151.348 36.4777C151.34 36.5341 151.3 36.6148 151.292 36.6711C150.665 39.3698 149.781 42.0619 148.663 44.7797C148.497 45.1588 148.491 45.6173 148.671 45.9862C148.818 46.3795 149.15 46.6832 149.529 46.8498C149.988 47.0561 150.631 46.9717 151.08 46.6311Z" fill="#EFF3F6"/>
                <path d="M45.509 125.612C46.0855 125.174 46.306 124.4 46.0205 123.758C45.7018 122.94 44.7502 122.551 43.9316 122.87C43.8676 122.919 43.8112 122.911 43.7471 122.96C43.6588 122.976 43.6267 123.001 43.5383 123.017C40.8982 124.063 38.1377 125.15 35.3771 126.237C35.2247 126.302 35.1043 126.343 34.9762 126.44C34.3997 126.878 34.2112 127.628 34.4646 128.294C34.7834 129.112 35.7029 129.525 36.5215 129.206C39.3384 128.127 42.0989 127.04 44.7391 125.994C44.8031 125.946 44.8595 125.953 44.9235 125.905C44.9799 125.913 45.0439 125.864 45.1323 125.847C45.2848 125.782 45.4129 125.685 45.509 125.612Z" fill="#EFF3F6"/>
                <path d="M28.6958 132.07C29.2723 131.632 29.4851 130.915 29.2317 130.249C29.0845 129.856 28.7848 129.528 28.4058 129.361C28.0267 129.194 27.6001 129.165 27.2068 129.312C27.1748 129.336 27.0864 129.353 27.0224 129.402C26.966 129.394 26.902 129.443 26.8136 129.459C25.5774 129.893 24.3977 130.335 23.2179 130.776L18.5384 132.462C18.386 132.527 18.2336 132.593 18.1054 132.69C17.5289 133.128 17.3161 133.845 17.5696 134.511C17.8883 135.33 18.7759 135.767 19.6187 135.48L24.2982 133.794C25.4139 133.401 26.5937 132.96 27.8939 132.477C27.958 132.429 28.0143 132.436 28.0784 132.388C28.1347 132.395 28.1988 132.347 28.2872 132.33C28.4473 132.208 28.5677 132.167 28.6958 132.07Z" fill="#EFF3F6"/>
                <path d="M154.987 29.1671C155.371 28.8751 155.602 28.4474 155.615 27.9325C155.717 24.8751 155.505 21.8035 155.02 18.8382C155.028 18.7818 154.979 18.7177 154.963 18.6294C154.97 18.573 154.954 18.4846 154.929 18.4526C154.763 17.5687 153.923 16.9947 153.039 17.161C152.774 17.2109 152.558 17.3248 152.365 17.4708C151.885 17.8357 151.631 18.4326 151.748 19.0513C151.74 19.1076 151.789 19.1717 151.781 19.228C151.773 19.2844 151.79 19.3728 151.814 19.4048C152.298 22.169 152.484 25.0075 152.381 27.8638C152.346 28.7489 153.05 29.4766 153.935 29.5114C154.338 29.5089 154.699 29.386 154.987 29.1671Z" fill="#EFF3F6"/>
                <path d="M151.847 11.6022C152.424 11.1642 152.644 10.3907 152.366 9.69251C151.223 6.92427 149.783 4.23024 148.038 1.66679C148.013 1.63476 148.013 1.63476 147.989 1.60273C147.965 1.5707 147.94 1.53868 147.916 1.50665C147.867 1.4426 147.843 1.41057 147.794 1.34651C147.527 0.994208 147.187 0.746908 146.768 0.660987C146.35 0.575065 145.932 0.690242 145.555 0.925829C144.827 1.42903 144.632 2.43575 145.135 3.16469C145.183 3.22874 145.208 3.26077 145.256 3.32482C145.281 3.35685 145.329 3.4209 145.346 3.50929C146.945 5.88057 148.296 8.39015 149.382 10.9496C149.7 11.7681 150.652 12.1565 151.47 11.8377C151.631 11.7161 151.751 11.6751 151.847 11.6022Z" fill="#EFF3F6"/>
            </svg>

        </div>
        <div class="coming-soon-footer">
            <span> © 2022</span>
        </div>

    </div>
</main>