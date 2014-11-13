<?php
namespace http;
use Countable;
use SplObserver;
use SplSubject;

class Client implements SplSubject, Countable {
    /**
     * Create a new HTTP client.
     *
     * @param string $driver
     * @param string $persistent_handle_id
     */
    function __construct($driver=null, $persistent_handle_id=null) {}

    /**
     * Add custom cookies.
     *
     * @param array $cookies
     */
    function addCookies($cookies) {}

    /**
     * Add specific SSL options.
     *
     * @param array $ssl_options
     * @return \http\Client
     */
    function addSslOptions($ssl_options = null) {}

    /**
     * Dequeue the http\Client\Request $request.
     *
     * @param \http\Client\Request $request
     * @return \http\Client
     */
    function dequeue($request) {}

    /**
     * Enable usage of an event library like libevent, which might improve performance with big socket sets.
     *
     * @param bool $enable
     * @return \http\Client
     */
    function enableEvents($enable=true) {}

    /**
     * Enable sending pipelined requests to the same host if the driver supports it.
     *
     * @param bool $enable
     * @return \http\Client
     */
    function enablePipelining($enable=true) {}

    /**
     * Add another http\Client\Request to the request queue.
     *
     * @param \http\Client\Request $request
     * @param callable $cb
     * @return \http\Client
     */
    function enqueue($request, $cb) {}

    /**
     * List available drivers
     *
     * @return array
     */
    static function getAvailableDrivers() {}

    /**
     * Get priorly set custom cookies.
     *
     * @return array
     */
    function getCookies() {}

    /**
     * Simply returns the http\Message chain representing the request/response history.
     *
     * @return \http\Message
     */
    function getHistory() {}

    /**
     * Returns the SplObjectStorage holding attached observers.
     *
     * @return \SplObjectStorage
     */
    function getObservers() {}

    /**
     * Get priorly set options.
     *
     * @return array
     */
    function getOptions() {}

    /**
     * Retrieve the progress information for $request.
     *
     * @param \http\Client\Request $request
     * @return object
     */
    function getProgressInfo($request) {}

    /**
     * Retrieve the corresponding reponse of an already finished request,
     * or the last received response if $request is not set.
     *
     * @param \http\Client\Request $request
     * @return \http\Client\Response
     */
    function getResponse($request=null) {}

    /**
     * Retrieve priorly set SSL options.
     *
     * @return array
     */
    function getSslOptions() {}

    /**
     * Get transfer related informatioin for a running or finished request.
     *
     * @param \http\Client\Request $request
     * @return object
     */
    function getTransferInfo($request) {}

    /**
     * Perform outstanding transfer actions.
     *
     * @return bool
     */
    function once() {}

    /**
     * Requeue an http\Client\Request.
     *
     * @param \http\Client\Request $request
     * @return \http\Client
     */
    function requeue($request) {}

    /**
     * Reset the client to the initial state.
     *
     * @return \http\Client
     */
    function reset() {}

    /**
     * Send all enqueued requests.
     *
     * @return \http\Client
     */
    function send() {}

    /**
     * Set custom cookies.
     * @param array $cookies
     * @return \http\Client
     */
    function setCookies($cookies=null) {}

    /**
     * Set client options.
     *
     * @param array $options
     * @return \http\Client
     */
    function setOptions($options=null) {}

    /**
     * Specifically set SSL options.
     *
     * @param array $ssl_options
     * @return \http\Client
     */
    function setSslOptions($ssl_options=null) {}

    /**
     * Wait for $timeout seconds for transfers to provide data.
     *
     * @param float $timeout
     * @return bool
     */
    function wait($timeout=0.0) {}

    /**
     * (PHP 5 &gt;= 5.1.0)<br/>
     * Count elements of an object
     * @link http://php.net/manual/en/countable.count.php
     * @return int The custom count as an integer.
     * </p>
     * <p>
     * The return value is cast to an integer.
     */
    public function count() {
        // TODO: Implement count() method.
    }

    /**
     * (PHP 5 &gt;= 5.1.0)<br/>
     * Attach an SplObserver
     * @link http://php.net/manual/en/splsubject.attach.php
     * @param SplObserver $observer <p>
     * The <b>SplObserver</b> to attach.
     * </p>
     * @return void
     */
    public function attach(SplObserver $observer) {
        // TODO: Implement attach() method.
    }

    /**
     * (PHP 5 &gt;= 5.1.0)<br/>
     * Detach an observer
     * @link http://php.net/manual/en/splsubject.detach.php
     * @param SplObserver $observer <p>
     * The <b>SplObserver</b> to detach.
     * </p>
     * @return void
     */
    public function detach(SplObserver $observer) {
        // TODO: Implement detach() method.
    }

    /**
     * (PHP 5 &gt;= 5.1.0)<br/>
     * Notify an observer
     * @link http://php.net/manual/en/splsubject.notify.php
     * @return void
     */
    public function notify() {
        // TODO: Implement notify() method.
    }
}
