<?php
namespace http\Client;

class Curl {

//HTTP Protocol Version
    const HTTP_VERSION_1_0 = 0; // Use HTTP/1.0 protocol version.
    const HTTP_VERSION_1_1 = 0; // Use HTTP/1.1 protocol version.
    const HTTP_VERSION_ANY = 0; // Use any HTTP protocol version.

//SSL Protocol Version

    const SSL_VERSION_TLSv1_0 = 0; // Use TLS v1.0 encryption.
    const SSL_VERSION_TLSv1_1 = 0; // Use TLS v1.1 encryption.
    const SSL_VERSION_TLSv1_2 = 0; // Use TLS v1.2 encryption.
    const SSL_VERSION_TLSv1 = 0; // Use any TLS v1 encryption.
    const SSL_VERSION_SSLv2 = 0; // Use SSL v2 encryption.
    const SSL_VERSION_SSLv3 = 0; // Use SSL v3 encryption.
    const SSL_VERSION_ANY = 0; // Use any encryption.

//DNS IP Version

    const IPRESOLVE_V4 = 0; // Use IPv4 resolver.
    const IPRESOLVE_V6 = 0; // Use IPv6 resolver.
    const IPRESOLVE_ANY = 0; // Use any resolver.

//Authentication Type

    const AUTH_BASIC = 0; // Use Basic authentication.
    const AUTH_DIGEST = 0; // Use Digest authentication.
    const AUTH_DIGEST_IE = 0; // Use IE (lower v7) quirks with Digest authentication. Available if libcurl is v7.19.3 or more recent.
    const AUTH_NTLM = 0; // Use NTLM authentication.
    const AUTH_GSSNEG = 0; // Use GSS-Negotiate authentication.
    const AUTH_SPNEGO = 0; // Use HTTP Netgotiate authentication (SPNEGO, RFC4559). Available if libcurl is v7.38.0 or more recent.
    const AUTH_ANY = 0; // Use any authentication.

//Proxy Protocol Version

    const PROXY_SOCKS4 = 0; // Use SOCKSv4 proxy protocol.
    const PROXY_SOCKS4A = 0; // Use SOCKSv4a proxy protocol.
    const PROXY_SOCKS5_HOSTNAME = 0; // Use SOCKS5h proxy protocol.
    const PROXY_SOCKS5 = 0; // Use SOCKS5 proxy protoccol.
    const PROXY_HTTP = 0; // Use HTTP/1.1 proxy protocol.
    const PROXY_HTTP_1_0 = 0; // Use HTTP/1.0 proxy protocol. Available if libcurl is v7.19.4 or more recent.

//POST Redirection Behavior

    const POSTREDIR_301 = 0; //Keep POSTing on 301 redirects. Available if libcurl is v7.19.1 or more recent.
    const POSTREDIR_302 = 0; //Keep POSTing on 302 redirects. Available if libcurl is v7.19.1 or more recent.
    const POSTREDIR_303 = 0; //Keep POSTing on 303 redirects. Available if libcurl is v7.19.1 or more recent.
    const POSTREDIR_ALL = 0; //Keep POSTing on any redirect. Available if libcurl is v7.19.1 or more recent.

    /**
     * The HTTP protocol version. See http\Client\Curl::HTTP_VERSION_* constants.
     * @var int
     */
    var $protocol;

    //Proxies

    /**
     * The hostname of the proxy.
     * @var string
     */
    var $proxyhost;

    /**
     * See http\Client\Curl::PROXY_* constants.
     * @var int
     */
    var $proxytype;

    /**
     * The port number of the proxy.
     * @var int
     */
    var $proxyport;

    /**
     * user:password
     * @var string
     */
    var $proxyauth;

    /**
     * See http\Client\Curl::AUTH_* constants.
     * @var int
     */
    var $proxyauthtype;

    /**
     * Tunnel all operations through the proxy.
     * @var bool
     */
    var $proxytunnel;

    /**
     * Comma separated list of hosts where no proxy should be used. Available if libcurl is v7.19.4 or more recent.
     * @var string
     */
    var $noproxy;

    //DNS

    /**
     * Resolved hosts will be kept fot this number of seconds.
     * @var int
     */
    var $dns_cache_timeout;

    /**
     * See http\Client\Curl::IPRESOLVE_* constants.
     * @var int
     */
    var $ipresolve;

    /**
     * A list of HOST:PORT:ADDRESS mappings which pre-populate the DNS cache. Available if libcurl is v7.21.3 or more recent.
     * @var array
     */
    var $resolve;

    /**
     * Comma separated list of custom DNS servers of the form HOST[:PORT]. Available if libcurl is v7.24.0 or more recent and has built-in c-ares support.
     * @var string
     */
    var $dns_servers;

    /**
     * The name of the network interface name that the DNS resolver should bind to. Available if libcurl is v7.33.0 or more recent and has built-in c-ares support.
     * @var string
     */
    var $dns_interface;

    /**
     * The local IPv4 address that the resolver should bind to. Available if libcurl is v7.33.0 or more recent and has built-in c-ares support.
     * @var string
     */
    var $dns_local_ip4;

    /**
     * The local IPv6 address that the resolver should bind to. Available if libcurl is v7.33.0 or more recent and has built-in c-ares support.
     * @var string
     */
    var $dns_local_ip6;

    //Limits

    /**
     * Minimum speed in bytes per second.
     * @var int
     */
    var $low_speed_limit;

    /**
     * Maximum time in seconds the transfer can be below $low_speed_limit before cancelling.
     * @var int
     */
    var $low_speed_time;

    /**
     * Maximum download size.
     * @var int
     */
    var $maxfilesize;

    //Connection handling

    /**
     * Force a new connection.
     * @var bool
     */
    var $fresh_connect;

    /**
     * Force closing the connection.
     * @var bool
     */
    var $forbid_reuse;

    //Networking

    /**
     * Outgoing interface name.
     * @var string
     */
    var $interface;

    /**
     * A tuple of min/max ports.
     * @var array
     */
    var $portrange;

    /**
     * Override the URL’s port.
     * @var int
     */
    var $port;

    /**
     * RFC4007 zone_id. Available if libcurl is v7.19.0 or more recent.
     * @var int
     */
    var $address_scope;

    /**
     * Whether to use TCP keepalive. Available if libcurl is v7.25.0 or more recent.
     * @var bool
     */
    var $tcp_keepalive;

    /**
     * Seconds to wait before sending keepalive probes. Available if libcurl is v7.25.0 or more recent.
     * @var int
     */
    var $tcp_keepidle;

    /**
     * Interval in seconds to wait between sending keepalive probes. Available if libcurl is v7.25.0 or more recent.
     * @var int
     */
    var $tcp_keepintvl;

    /**
     * Disable Nagle’s algotrithm.
     * @var bool
     */
    var $tcp_nodelay;

    //Authentication

    /**
     * user:password
     * @var string
     */
    var $httpauth;

    /**
     * See http\Client\Curl::AUTH_* constants.
     * @var int
     */
    var $httpauthtype;

    //Redirection

    /**
     * How many redirects to follow.
     * @var int
     */
    var $redirect;

    /**
     * Whether to keep sending authentication credentials on redirects to different hosts.
     * @var bool
     */
    var $unrestricted_auth;

    /**
     * See http\Client\Curl::POSTREDIR_* constants. Available if libcurl is v7.19.1 or more recent.
     * @var int
     */
    var $postredir;

    //Retries

    /**
     * Retry this often.
     * @var int
     */
    var $retrycount;

    /**
     * Pause this number of seconds between retries.
     * @var float
     */
    var $retrydelay;

    //Special headers

    /**
     * Custom Referer header.
     * @var string
     */
    var $referer;

    /**
     * Whether to automatically send referers.
     * @var bool
     */
    var $autoreferer;

    /**
     * Custom User-Agent header.
     * @var string
     */
    var $useragent;

    /**
     * Custom ETag.
     * @var string
     */
    var $etag;

    /**
     * Whether to request compressed content (through Accept-Encoding).
     * @var bool
     */
    var $compress;

    /**
     * Custom If-(Un)Modified since time. If less than zero, the current time will be added.
     * @var int
     */
    var $lastmodified;

    //Resume/Ranges

    /**
     * Resume from this byte offset.
     * @var int
     */
    var $resume;

    /**
     * Fetch specific ranges (if server supports byte ranges).
     * @var array
     */
    var $range;

    //Cookies

    /**
     * Whether to URLencode cookies.
     * @var bool
     */
    var $encodecookies;

    /**
     * List of custom cookies in the form [“name” => “value”].
     * @var array
     */
    var $cookies;

    /**
     * Ignore previous session cookies to be loaded from $cookiestore.
     * @var bool
     */
    var $cookiesession;

    /**
     * Path to a Netscape cookie file, from which cookies will be loaded resp. to which cookies will be written.
     * @var string
     */
    var $cookiestore;

    //Timeouts

    /**
     * Seconds the complete transfer may take.
     * @var float
     */
    var $timeout;

    /**
     * Seconds the connect may take.
     * @var float
     */
    var $connecttimeout;

    /**
     * Senconds to wait for the server to send a response to “Expect: 100-Continue” before just proceeding with the request. Available if libcurl is v7.36.0 or more recent.
     * @var float
     */
    var $expect_100_timeout;

    //SSL

    /**
     * Subarray of SSL related options:
     * @var array
     */
    var $ssl;

    /**
     * SSL certificate file.
     * @var string
     */
    var $cert;

    /**
     * Certificate type (DER, PEM). (Secure Transport additionally supports P12).
     * @var string
     */
    var $certtype;

    /**
     * Private key file.
     * @var string
     */
    var $key;

    /**
     * PK type (PEM, DER, ENG).
     * @var string
     */
    var $keytype;

    /**
     * The password for the private key.
     * @var string
     */
    var $keypasswd;

    /**
     * Crypto engine to use for the private key.
     * @var string
     */
    var $engine;

    /**
     * See http\Client\Curl::SSL_VERSION_* constants.
     * @var int
     */
    var $version;

    /**
     * Whether to apply peer verification.
     * @var bool
     */
    var $verifypeer;

    /**
     * Whether to apply host verification.
     * @var bool
     */
    var $verifyhost;

    /**
     * One or more cipher strings separated by colons.
     * @var string
     */
    var $cipher_list;

    /**
     * CA bundle to verify the peer with.
     * @var string
     */
    var $cainfo;

    /**
     * Directory with prepared CA certs to verify the peer with.
     * @var string
     */
    var $capath;

    /**
     * A file used to read from to seed the random engine.
     * @var string
     */
    var $random_file;

    /**
     * A Entropy Gathering Daemon socket.
     * @var string
     */
    var $egdsocket;

    /**
     * CA PEM cert for peer verification. Available if libcurl is v7.19.0 or more recent.
     * @var string
     */
    var $issuercert;

    /**
     * File with the concatenation of CRL in PEM format. Available if libcurl was built with OpenSSL support.
     * @var string
     */
    var $crlfile;

    /**
     * Enable gathering of SSL certificate chain information. Available if libcurl is v7.19.1 or more recent.
     * @var bool
     */
    var $certinfo;
}
