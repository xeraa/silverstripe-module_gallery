# Basic Gallery and Intro Page Module
Easily extendable image gallery, flexible image gallery, and intro page module - intentionally kept very simple.


## Description
If you want to create a gallery or intro page (with rotating images), this module is a good starting point.


## Requirements
* SilverStripe 2.4+
* DataObjectManager
* Uploadify


## Installation
1. Extract the silverstripe-module_gallery folder into the top level of your site and rename it to module_gallery.
2. Run ``/dev/build?flush=all`` to add the two new page types.


## Configuration
None at the moment.


## Usage
Intro page and the regular gallery should be relatively self-explaining. In the flexible gallery you can put the images anywhere inside the ``$Content`` area with the short code ``[FlexibleGallery]``.


## License
    Copyright (c) 2011 & 2012, Philipp Krenn
    All rights reserved.
   
    Redistribution and use in source and binary forms, with or without
    modification, are permitted provided that the following conditions are met:
        * Redistributions of source code must retain the above copyright
          notice, this list of conditions and the following disclaimer.
        * Redistributions in binary form must reproduce the above copyright
          notice, this list of conditions and the following disclaimer in the
          documentation and/or other materials provided with the distribution.
        * Neither the name of the authors nor the names of its contributors
          may be used to endorse or promote products derived from this
          software without specific prior written permission.

    THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS "AS IS" AND ANY
    EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE IMPLIED
    WARRANTIES OF MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE ARE
    DISCLAIMED. IN NO EVENT SHALL THE AUTHORS BE LIABLE FOR ANY
    DIRECT, INDIRECT, INCIDENTAL, SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES
    (INCLUDING, BUT NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES;
    LOSS OF USE, DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND
    ON ANY THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT
    (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE OF THIS
    SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF SUCH DAMAGE.