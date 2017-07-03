#!/usr/bin/env php
<?php
    /** UNDER CONSTRUCTION XXX: delete me later **/

    /***********************************/
    /** A Simple Filesystem using OOP **/
    /***********************************/

    /**
     * @brief A class to encapsulate the information
     *  about a file.
     */
    class FileInfo {
        public function __construct ($name, $size) {
            $this->$_name = $name;
            $this->$_size = $size;
        }

        private $_name;
        private $_size;
    }

    /**
     * @brief A class to encapsulate the information
     *  about a directory.
     */
    class DirectoryInfo {
        public function __construct ($name) {
            $this->$_name = $name;
        }

        public $_name;
        public $_filesCount;
        // TODO
        // Declare an array of FileInfo objects
    }

    function main($commandLineArgs) {
        if (count($commandLineArgs) < 2) {
            exit(1);
        }

        $directoryPath = $commandLineArgs[1];
        print_r(array_values(scandir($directoryPath)));
        echo "\n";

        // TODO create directory object
    }

    main($argv);
?>
