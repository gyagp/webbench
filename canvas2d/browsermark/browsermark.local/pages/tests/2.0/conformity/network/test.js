/**
 * Conformity Network
 *
 * Measure top speed, used ISP and variance of page loads
 *
 * @version 2.0
 * @author Jouni Tuovinen <jouni.tuovinen@rightware.com>
 * @copyright 2012 Rightware
 **/

// Default guide for benchmark.js
var guide = {
    isDoable : true, // Always doable
    operations : 0,
    time : 0,
    internalCounter : false,
    testName : 'Conformity Network',
    testVersion : '2.0',
    compareScore : 1,
    isConformity : 1
};

var forceContinent = 0;

var test = {
    init : function()
    {
        // Save test but not asynchronous, before continue test must be saved to prevent mismatch error
        $.ajax(
        {
            url: '/ajax/set_test',
            async: false,
            type: 'POST',
            data:
            {
                test_name: guide.testName,
                test_version: guide.testVersion
            }
        });

        // Because of IE <= 9 lack of Access-Control-Allow-Origin we need to test IE9 and below against browsermark own
        // server
        if ($.browser.msie && parseInt($.browser.version, 10) < 10)
        {
            if (continentServer != window.location.protocol + '//' + window.location.hostname)
            {
                continentServer = window.location.protocol + '//' + window.location.hostname;
                forceContinent = 1; // North America forced
            }
        }
        return guide;

    },
    run : function(isFinal, loopCount)
    {
        var ping = [];
        var download = [];
        var upload = [];

        // Create payload for upload test
        var payload = {
            a: Array(2805).join('a'),
            b: Array(2805).join('b'),
            c: Array(2805).join('c'),
            d: Array(2805).join('d'),
            e: Array(2805).join('e'),
            f: Array(2805).join('f'),
            g: Array(2805).join('g'),
            h: Array(2805).join('h'),
            i: Array(2805).join('i'),
            j: Array(2805).join('j'),
            k: Array(2805).join('k'),
            l: Array(2805).join('l'),
            m: Array(2805).join('m'),
            n: Array(2805).join('n'),
            o: Array(2805).join('o'),
            p: Array(2805).join('p'),
            q: Array(2805).join('q'),
            r: Array(2805).join('r'),
            s: Array(2805).join('s'),
            t: Array(2805).join('t'),
            u: Array(2805).join('u'),
            v: Array(2805).join('v'),
            w: Array(2805).join('w'),
            x: Array(2805).join('x'),
            y: Array(2805).join('y'),
            z: Array(2805).join('z')
        };

        // Loop requests 30 times
        for (i = 0; i < 30; i++)
        {
            // First we measure ping
            d = new Date();
            startPing = d.getTime();

            $.ajax(
            {
                url: continentServer + '/network_speed/upload.php',
                async: false,
                cache: false,
                dataType: 'json'
            }).done(function()
            {
                d = new Date();
                endPing = d.getTime();
                diffPing = endPing - startPing;
                ping.push(diffPing);
            });

            // Secondly we measure download speed
            d = new Date();
            startDownload = d.getTime();
            $.ajax(
            {
                url: continentServer + '/network_speed/download.php',
                async: false,
                cache: false
            }).done(function(data)
            {
                d = new Date();
                endDownload = d.getTime();
                diffDownload = endDownload - startDownload;
                downloadBytes = data.length;
                downloadKbits = (downloadBytes * 8 / 1024) / (diffDownload / 1000);
                download.push(downloadKbits);
            });

            // Finally we measure upload speed
            d = new Date();
            startUpload = d.getTime();
            $.ajax(
            {
                url: continentServer + '/network_speed/upload.php',
                async: false,
                cache: false,
                data: payload,
                dataType: 'json',
                type: 'POST'
            }).done(function(data)
            {
                d = new Date();
                endUpload = d.getTime();
                diffUpload = endUpload -startUpload;
                uploadBytes = data.bytes;
                uploadKbits = (uploadBytes * 8 / 1024) / (diffUpload / 1000);
                upload.push(uploadKbits);
            });
        }

        // Request results json
        $.ajax(
        {
            url: '/ajax/network',
            data:
            {
                pings: ping,
                downloads: download,
                uploads: upload,
                continent: forceContinent
            },
            type: 'POST',
            dataType: 'json'
        }).done(function(network)
        {
            benchmark.submitResult(1, guide, network);
        });
    }
};