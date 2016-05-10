<?php

namespace Instagram\API;

class Constants {

    /*
	 * API Base URL.
	 */
    const BASE_URL = "https://i.instagram.com/api";

    /*
     * User Agent for API Requests
     */
    const USER_AGENT = "Instagram 7.19.1 Android (19/4.4.2; 480dpi; 1080x1920; samsung; SM-G900I; klte; qcom; en_NZ)";

    /*
	 * Key used to generate JSON Signatures
	 */
    const IG_SIGNATURE_KEY = "8082724c0ba508df900162dfe68ecb3c435873f595df87a8e19230f1fa4f6e13";

    /*
     * Version of the Signature Key
     */
    const IG_SIGNATURE_KEY_VERSION = "4";

    /*
     * Connection Type
     */
    const IG_CAPABILITIES = "3Q==";

    /*
     * Connection Type
     */
    const IG_CONNECTION_TYPE = "WIFI";

    /*
     * Connection Type
     */
    const ACCEPT_LANGUAGE = "en-NZ";

    /*
     * Connection Type
     */
    const ACCEPT_ENCODING = "gzip, deflate, sdch";

    /*
     * Your Timezone
     */
    const TIMEZONE = "Pacific/Auckland";

    /*
     * Your Timezone Offset
     */
    const TIMEZONE_OFFSET = 43200;

}