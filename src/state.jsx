const user = {
    name: 'Ivan',
    lastname: 'Ivanov',
    email: 'Bana@asd.sja',
    about: 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias aliquam consequatur eligendi esse est, harum illum ipsam minima minus, nostrum pariatur perferendis praesentium quasi quisquam quos ratione sequi voluptas voluptate!',
    avatar: 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSlR3hMw_3daUL3Uhr5Y3uJh_kMaYzyqQhhPA&usqp=CAU'
};

const users = {
    0: {name: "Ипатий", lastname: "Ельцин", id: 1},
    1: {name: "Валерия", lastname: "Ялбачевa", id: 12},
    2: {name: "Ксения", lastname: "Тетеринa", id: 15},
    3: {name: "Нина", lastname: "Ельцинa", id: 11},
    4: {name: "Владислава", lastname: "Енютинa", id: 166},
    5: {name: "Юлия", lastname: "Юлбачевa", id: 131},
    6: {name: "Петр", lastname: "Праздников", id: 165},
    7: {name: "Владислав", lastname: "Вольпов", id: 1322},
    8: {name: "Константин", lastname: "Вольпов", id: 1654},
    9: {name: "Нина", lastname: "Тетеринa", id: 15666},
    10: {name: "Владислав", lastname: "Яблочков", id: 12452},
};

export const getUser = () => {
    return user;
};

export const getUsers = () => {
    return users;
};