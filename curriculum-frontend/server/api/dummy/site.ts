const site =
    {
        "id": 1,
        "name": "Juwan Ferry Jr.",
        "profile_image": "https://via.placeholder.com/640x480.png/0044ee?text=qui",
        "logo": "https://via.placeholder.com/640x480.png/000077?text=atque",
        "user_id": 1,
        "created_at": "2024-12-21T07:52:17.000000Z",
        "updated_at": "2024-12-21T07:52:17.000000Z",
        "body": {
            "id": 1,
            "site_id": 1,
            "created_at": "2024-12-21T07:52:17.000000Z",
            "updated_at": "2024-12-21T07:52:17.000000Z",
            "styles": {
                "backgroundGradient": "background: rgb(74, 34, 0);background: linear-gradient(164deg, rgba(74, 34, 0, 1) 0%, rgba(10, 10, 12, 1) 50%);background-repeat: no-repeat;background-attachment: fixed;",
                "created_at": "2024-12-21T07:52:17.637000Z",
                "updated_at": "2024-12-21T07:52:17.637000Z",
                "id": 1
            },
            "buttons": [
                {
                    "button": {
                        "id": 1,
                        "name": "Reilly Bogisich PhD",
                        "page_id": 1,
                        "created_at": "2024-12-21T07:52:17.000000Z",
                        "updated_at": "2024-12-21T07:52:17.000000Z"
                    },
                    "parent_id": 1,
                    "class": "afterLine",
                    "styles": {
                        "fontFamily": "Roboto-Thin",
                        "color": "white",
                        "fontSize": "1.70rem",
                        "afterLineBackground": "#CC5F00",
                        "updated_at": "2024-12-21T07:52:17.672000Z",
                        "created_at": "2024-12-21T07:52:17.672000Z",
                        "id": 1
                    }
                },
                {
                    "button": {
                        "id": 2,
                        "name": "Elwin Denesik V",
                        "page_id": 2,
                        "created_at": "2024-12-21T07:52:17.000000Z",
                        "updated_at": "2024-12-21T07:52:17.000000Z"
                    },
                    "parent_id": 1,
                    "class": "afterLine",
                    "styles": {
                        "fontFamily": "Roboto-Thin",
                        "color": "white",
                        "fontSize": "1.70rem",
                        "afterLineBackground": "#CC5F00",
                        "updated_at": "2024-12-21T07:52:17.685000Z",
                        "created_at": "2024-12-21T07:52:17.685000Z",
                        "id": 2
                    }
                },
                {
                    "button": {
                        "id": 3,
                        "name": "Rodrick Roberts",
                        "page_id": 3,
                        "created_at": "2024-12-21T07:52:17.000000Z",
                        "updated_at": "2024-12-21T07:52:17.000000Z"
                    },
                    "parent_id": 1,
                    "class": "afterLine",
                    "styles": {
                        "fontFamily": "Roboto-Thin",
                        "color": "white",
                        "fontSize": "1.70rem",
                        "afterLineBackground": "#CC5F00",
                        "updated_at": "2024-12-21T07:52:17.691000Z",
                        "created_at": "2024-12-21T07:52:17.691000Z",
                        "id": 3
                    }
                },
                {
                    "button": {
                        "id": 4,
                        "name": "Narciso Lang",
                        "page_id": 4,
                        "created_at": "2024-12-21T07:52:17.000000Z",
                        "updated_at": "2024-12-21T07:52:17.000000Z"
                    },
                    "parent_id": 1,
                    "class": "afterLine",
                    "styles": {
                        "fontFamily": "Roboto-Thin",
                        "color": "white",
                        "fontSize": "1.70rem",
                        "afterLineBackground": "#CC5F00",
                        "updated_at": "2024-12-21T07:52:17.698000Z",
                        "created_at": "2024-12-21T07:52:17.698000Z",
                        "id": 4
                    }
                }
            ]
        },
        "header": {
            "id": 1,
            "site_id": 1,
            "created_at": "2024-12-21T07:52:17.000000Z",
            "updated_at": "2024-12-21T07:52:17.000000Z",
            "buttons": [
                {
                    "button": {
                        "id": 5,
                        "name": "Dr. Bethel Gerlach DVM",
                        "page_id": 5,
                        "created_at": "2024-12-21T07:52:17.000000Z",
                        "updated_at": "2024-12-21T07:52:17.000000Z"
                    },
                    "parent_id": 1,
                    "class": "afterSquare",
                    "styles": {
                        "fontFamily": "Roboto-Thin",
                        "color": "white",
                        "fontSize": "1.70rem",
                        "afterSquareBackground": "#CC5F00",
                        "updated_at": "2024-12-21T07:52:17.704000Z",
                        "created_at": "2024-12-21T07:52:17.704000Z",
                        "id": 5
                    }
                }
            ]
        }
    };

export default defineEventHandler ((event) => {
    return {
        site
    }
})