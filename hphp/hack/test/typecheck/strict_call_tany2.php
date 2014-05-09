//// partial.php
<?hh
/**
 * Copyright (c) 2014, Facebook, Inc.
 * All rights reserved.
 *
 * This source code is licensed under the BSD-style license found in the
 * LICENSE file in the "hack" directory of this source tree. An additional grant
 * of patent rights can be found in the PATENTS file in the same directory.
 *
 */

class C {
  public function any() {}
}

//// strict.php
<?hh // strict
// Copyright 2004-present Facebook. All Rights Reserved.

function f(): void {
  $c = new C();
  $c->any()->foo();
}