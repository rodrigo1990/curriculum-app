#!/bin/bash

mongo <<EOF
use testing;
db.updateUser("root", {
  roles: [
      { role: "readWrite", db: "testing" }
  ]
})
EOF
