<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>A Simple 360-View Sample</title>
    <link rel="shortcut icon" href="{{ asset('general/media/logos/auth-icon-1.png') }}" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/pannellum@2.5.6/build/pannellum.css"/>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/pannellum@2.5.6/build/pannellum.js"></script>
    <style>
        html, body {
            margin: 0;
            padding: 0;
            height: 100%;
        }

        #panorama {
            width: 100%;
            height: 100vh; /* Full screen */
        }

        #logo-fixed {
            position: absolute;
            top: 15px;
            right: 15px;
            z-index: 9999;
            padding: 5px;
            border-radius: 5px;
        }

        #logo-fixed img {
            height: 90px;
        }

        /* Sample Costume hotSpot */
        #audio-fixed {
            position: absolute;
            top: 652px;
            right: 72px;
            z-index: 9999;
        }
    </style>
</head>
<body>

    <!-- begin::Logo -->
    <div id="logo-fixed">
        <a href="{{ route('sample-360-view') }}">
            <img alt="Logo" src="{{ asset('general/media/logos/mimika-icon-1.png') }}" />
        </a>
    </div>
    <!-- end::Logo -->

    <div id="audio-fixed">
        <audio controls>
            <source src="{{ asset('general/media/audios/canon-piano.mp3') }}" type="audio/ogg">
            <source src="{{ asset('general/media/audios/canon-piano.mp3') }}" type="audio/mpeg">
            Your browser does not support the audio element.
        </audio>
    </div>

    <div id="panorama"></div>
    <script>
        pannellum.viewer('panorama', {
            "default": {
                "firstScene": "scene_awal",
                "sceneFadeDuration": 1000,
                "compass": true,
            },
            "scenes": {
                "scene_awal": {
                    "title": "MIMIKA, MIDDLE PAPUA, INDONESIA",
                    "type": "equirectangular",
                    "panorama": `{{ asset('general/media/sample-360/office/2.jpg') }}`,
                    "autoLoad": true,
                    "autoRotate": 0,
                    "hfov": 120, // nilai antara 50 - 120 disarankan
                    "hotSpots": [
                        {
                            "pitch": 10,
                            "yaw": 0,
                            "type": "info",
                            "text": "PINTU MASUK",
                            "URL": "https://google.com"
                        },
                        {
                            "pitch": 5,
                            "yaw": 0,
                            "type": "scene",
                            "text": "Masuk ke RUANG TUNGGU",
                            "sceneId": "ruang_tunggu"
                        },
                        {
                            "pitch": -10,
                            "yaw": -53,
                            "type": "custom",
                            "createTooltipFunc": InstitutionButton,
                            "createTooltipArgs": {
                                "label": "Mimika Rumah Kita",
                                "logo": "{{ asset('general/media/icons/gov-1.png') }}",
                                "url": "https://webcapil.mimikarumahkita.com/",
                                "logoSize": "50px",
                                "logoMargin": "0px",
                                "logoPadding": "0px"
                                // "width": "180px"
                            }
                        },
                        {
                            "pitch": -15,
                            "yaw": -53,
                            "type": "custom",
                            "createTooltipFunc": InstitutionButton,
                            "createTooltipArgs": {
                                "label": "Disdukcapil Kab. Mimika",
                                "logo": "{{ asset('general/media/icons/x-icon.png') }}",
                                "url": "https://disdukcapil.mimikakab.go.id",
                                "logoSize": "35px",
                                "logoMargin": "0px",
                                "logoPadding": "10px 8px"
                                // "width": "240px"
                            }
                        }
                    ]
                },
                "ruang_tunggu": {
                    "panorama": "{{ asset('general/media/sample-360/office/5.jpg') }}",
                    "type": "equirectangular",
                    "autoLoad": true,
                    "title": "RUANG TUNGGU",
                    "autoRotate": 1,
                    "hfov": 200, // nilai antara 50 - 120 disarankan
                    "hotSpots": [
                        {
                            "pitch": -9,
                            "yaw": 50,
                            "type": "scene",
                            "text": "Kembali ke PINTU MASUK",
                            "sceneId": "scene_awal"
                        },
                        {
                            "pitch": 32,
                            "yaw": 21.5,
                            "type": "custom",
                            "createTooltipFunc": ShowPicture,
                            "createTooltipArgs": {
                                "src": "{{ asset('general/media/icons/name-sign-2.png') }}",   // Gambar Anda
                                "width": "200px",
                                "text": "Ruang VIP"
                            }
                        },
                        {
                            "pitch": 22,
                            "yaw": 25.5,
                            "type": "info",
                            "text": "Kantor DUKCAPIL Kabupaten Mimika",
                            "URL": "https://google.com"
                        },
                        {
                            "pitch": 3,
                            "yaw": -90,
                            "type": "scene",
                            "text": "Pindah ke RUANG KEPEGAWAIAN",
                            "sceneId": "ruang_kepegawaian"
                        },
                    ]
                },
                "ruang_kepegawaian": {
                    "panorama": "{{ asset('general/media/sample-360/office/7.jpg') }}",
                    "type": "equirectangular",
                    "autoLoad": true,
                    "title": "RUANG KEPEGAWAIAN",
                    "autoRotate": 1,
                    "hfov": 200, // nilai antara 50 - 120 disarankan
                    "hotSpots": [
                        {
                            "pitch": 2,
                            "yaw": 173,
                            "type": "scene",
                            "text": "Kembali ke RUANG TUNGGU",
                            "sceneId": "ruang_tunggu"
                        },
                        {
                            "pitch": 2,
                            "yaw": 210,
                            "type": "scene",
                            "text": "Pindah ke RUANG MEETING",
                            "sceneId": "ruang_meeting"
                        },
                        {
                            "pitch": 1,
                            "yaw": 273,
                            "type": "scene",
                            "text": "Kembali ke KANTIN KARYAWAN",
                            "sceneId": "kantin_karyawan"
                        }
                    ]
                },
                "ruang_meeting": {
                    "panorama": "{{ asset('general/media/sample-360/office/17.jpg') }}",
                    "type": "equirectangular",
                    "autoLoad": true,
                    "title": "RUANG MEETING",
                    "autoRotate": 1,
                    "hfov": 200, // nilai antara 50 - 120 disarankan
                    "hotSpots": [
                        {
                            "pitch": -5,
                            "yaw": 165,
                            "type": "scene",
                            "text": "Kembali ke RUANG KEPEGAWAIAN",
                            "sceneId": "ruang_kepegawaian"
                        }
                    ]
                },
                "kantin_karyawan": {
                    "panorama": "{{ asset('general/media/sample-360/office/15.jpg') }}",
                    "type": "equirectangular",
                    "autoLoad": true,
                    "title": "KANTIN KARYAWAN",
                    "autoRotate": 1,
                    "hfov": 200, // nilai antara 50 - 120 disarankan
                    "hotSpots": [
                        {
                            "pitch": -5,
                            "yaw": 165,
                            "type": "scene",
                            "text": "Kembali ke RUANG KEPEGAWAIAN",
                            "sceneId": "ruang_kepegawaian"
                        }
                    ]
                }
            }
        });


        // ============================================================================================= //
        //                                    ** CUSTOM FUNCTION **                                      //
        // ============================================================================================= //

        function InstitutionButton(hotSpotDiv, args) {
            // Set custom size
            const containerWidth = args.width || "220px";
            const logoSize       = args.logoSize || "45px";
            const logoMargin     = args.logoMargin || "0px";
            const logoPadding    = args.logoPadding || "0px";

            // Container style ( Main Configuration )
            hotSpotDiv.style.display        = "flex";
            hotSpotDiv.style.alignItems     = "center";
            hotSpotDiv.style.background     = "#3CB371";
            hotSpotDiv.style.border         = "1px solid #1B8A6B";
            hotSpotDiv.style.borderRadius   = "8px";
            hotSpotDiv.style.padding        = "10px 8px";
            hotSpotDiv.style.boxShadow      = "0 2px 6px rgba(0,0,0,0.2)";
            hotSpotDiv.style.cursor         = "pointer";
            hotSpotDiv.style.fontFamily     = "Arial, sans-serif";
            hotSpotDiv.style.fontSize       = "14px";
            hotSpotDiv.style.fontWeight     = "Bold";
            hotSpotDiv.style.color          = "#FFFFFF";
            hotSpotDiv.style.maxWidth       = containerWidth;
            hotSpotDiv.style.minWidth       = containerWidth;
            hotSpotDiv.style.gap            = "7px";

            // A function to handler Logo 
            const logo = document.createElement("img");
            logo.src = args.logo;
            logo.alt = "Logo";
            logo.style.width = logoSize;
            logo.style.height = logoSize;
            logo.style.margin = logoMargin;
            logo.style.padding = logoPadding;
            logo.style.objectFit = "contain";
            logo.style.borderRadius = "6px";
            logo.style.flexShrink = "0";

            // A function to handler Label
            const label = document.createElement("span");
            label.innerText = args.label;
            label.style.color = "#FFFFFF";
            label.style.flex = "1";

            // Combine
            hotSpotDiv.appendChild(logo);
            hotSpotDiv.appendChild(label);

            hotSpotDiv.onclick = function () {
                window.open(args.url, "_blank");
            };
        }

        function ShowPicture(hotSpotDiv, args) {
            const img = document.createElement("img");
            img.src                 = args.src;
            img.style.width         = args.width || "160px";
            img.style.objectFit     = "contain";
            img.style.background    = "transparent";
            img.style.pointerEvents = "none";  // Tidak bisa diklik jika hanya dekorasi
            hotSpotDiv.appendChild(img);
        }
    </script>

</body>
</html>