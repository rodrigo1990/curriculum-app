db = db.getSiblingDB("curriculum_app");
db.createUser({
    user: root,
    pwd: example,
    roles: [{ role: "readWrite", db: "curriculum_app" }]
});