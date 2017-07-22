--
-- PostgreSQL database dump
--

-- Dumped from database version 9.6.1
-- Dumped by pg_dump version 9.6.1

SET statement_timeout = 0;
SET lock_timeout = 0;
SET idle_in_transaction_session_timeout = 0;
SET client_encoding = 'UTF8';
SET standard_conforming_strings = on;
SET check_function_bodies = false;
SET client_min_messages = warning;
SET row_security = off;

--
-- Name: plpgsql; Type: EXTENSION; Schema: -; Owner: 
--

CREATE EXTENSION IF NOT EXISTS plpgsql WITH SCHEMA pg_catalog;


--
-- Name: EXTENSION plpgsql; Type: COMMENT; Schema: -; Owner: 
--

COMMENT ON EXTENSION plpgsql IS 'PL/pgSQL procedural language';


SET search_path = public, pg_catalog;

SET default_tablespace = '';

SET default_with_oids = false;

--
-- Name: callback; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE callback (
    id integer NOT NULL,
    name character varying(255) NOT NULL,
    phone character varying(50) NOT NULL,
    time_add timestamp without time zone DEFAULT now()
);


ALTER TABLE callback OWNER TO postgres;

--
-- Name: callback_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE callback_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE callback_id_seq OWNER TO postgres;

--
-- Name: callback_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE callback_id_seq OWNED BY callback.id;


--
-- Name: cart; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE cart (
    id integer NOT NULL,
    session_id character varying(100) NOT NULL,
    user_id integer,
    time_create timestamp without time zone DEFAULT now(),
    product_id integer NOT NULL,
    count smallint NOT NULL,
    is_active boolean DEFAULT true,
    order_id integer
);


ALTER TABLE cart OWNER TO postgres;

--
-- Name: cart_order; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE cart_order (
    id integer NOT NULL,
    user_id integer,
    user_name character varying(150) NOT NULL,
    user_email character varying(255),
    user_phone character varying(50) NOT NULL,
    delivery_address character varying(255) NOT NULL,
    delivery_type smallint NOT NULL,
    payment_type smallint NOT NULL,
    comment text,
    time_create timestamp without time zone DEFAULT now()
);


ALTER TABLE cart_order OWNER TO postgres;

--
-- Name: cart_order_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE cart_order_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE cart_order_id_seq OWNER TO postgres;

--
-- Name: cart_order_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE cart_order_id_seq OWNED BY cart_order.id;


--
-- Name: cat_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE cat_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE cat_id_seq OWNER TO postgres;

--
-- Name: cat_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE cat_id_seq OWNED BY cart.id;


--
-- Name: category; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE category (
    id bigint NOT NULL,
    root integer,
    lft integer NOT NULL,
    rgt integer NOT NULL,
    lvl smallint NOT NULL,
    name character varying(60) NOT NULL,
    icon character varying(255),
    icon_type smallint DEFAULT 1 NOT NULL,
    active boolean DEFAULT true NOT NULL,
    selected boolean DEFAULT false NOT NULL,
    disabled boolean DEFAULT false NOT NULL,
    readonly boolean DEFAULT false NOT NULL,
    visible boolean DEFAULT true NOT NULL,
    collapsed boolean DEFAULT false NOT NULL,
    movable_u boolean DEFAULT true NOT NULL,
    movable_d boolean DEFAULT true NOT NULL,
    movable_l boolean DEFAULT true NOT NULL,
    movable_r boolean DEFAULT true NOT NULL,
    removable boolean DEFAULT true NOT NULL,
    removable_all boolean DEFAULT false NOT NULL,
    alias character varying(50)
);


ALTER TABLE category OWNER TO postgres;

--
-- Name: ceo; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE ceo (
    route_name character varying(255) NOT NULL,
    route_parameters jsonb NOT NULL,
    name character varying(255),
    ceo_text text,
    title character varying(70) NOT NULL,
    meta_keywords character varying(110) NOT NULL,
    meta_description character varying(110) NOT NULL
);


ALTER TABLE ceo OWNER TO postgres;

--
-- Name: characteristics; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE characteristics (
    key character varying(255) NOT NULL,
    name character varying(255) NOT NULL,
    icon character varying(255),
    unit character varying(5)
);


ALTER TABLE characteristics OWNER TO postgres;

--
-- Name: message; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE message (
    id integer NOT NULL,
    language character varying(16) NOT NULL,
    translation text
);


ALTER TABLE message OWNER TO postgres;

--
-- Name: migration; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE migration (
    version character varying(180) NOT NULL,
    apply_time integer
);


ALTER TABLE migration OWNER TO postgres;

--
-- Name: page; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE page (
    id integer NOT NULL,
    name character varying(255) NOT NULL,
    alias character varying(255) NOT NULL,
    shot_text text,
    text text NOT NULL,
    is_active boolean,
    preview_image character varying(255)
);


ALTER TABLE page OWNER TO postgres;

--
-- Name: page_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE page_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE page_id_seq OWNER TO postgres;

--
-- Name: page_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE page_id_seq OWNED BY page.id;


--
-- Name: product; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE product (
    name character varying(255) NOT NULL,
    alias character varying(255) DEFAULT true NOT NULL,
    is_available boolean,
    created_at timestamp(6) without time zone DEFAULT now(),
    update_at timestamp without time zone,
    description text,
    characteristics jsonb,
    images jsonb,
    fk_category_id integer NOT NULL,
    id integer NOT NULL,
    price numeric(10,1),
    old_price numeric(10,1),
    is_top boolean DEFAULT false,
    youtube_url character varying(255)
);


ALTER TABLE product OWNER TO postgres;

--
-- Name: product_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE product_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE product_id_seq OWNER TO postgres;

--
-- Name: product_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE product_id_seq OWNED BY product.id;


--
-- Name: profile; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE profile (
    id integer NOT NULL,
    user_id integer NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone,
    full_name character varying(255),
    timezone character varying(255),
    phone character varying(50)
);


ALTER TABLE profile OWNER TO postgres;

--
-- Name: profile_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE profile_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE profile_id_seq OWNER TO postgres;

--
-- Name: profile_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE profile_id_seq OWNED BY profile.id;


--
-- Name: role; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE role (
    id integer NOT NULL,
    name character varying(255) NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone,
    can_admin smallint DEFAULT 0 NOT NULL
);


ALTER TABLE role OWNER TO postgres;

--
-- Name: role_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE role_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE role_id_seq OWNER TO postgres;

--
-- Name: role_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE role_id_seq OWNED BY role.id;


--
-- Name: source_message; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE source_message (
    id integer NOT NULL,
    category character varying(255),
    message text
);


ALTER TABLE source_message OWNER TO postgres;

--
-- Name: source_message_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE source_message_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE source_message_id_seq OWNER TO postgres;

--
-- Name: source_message_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE source_message_id_seq OWNED BY source_message.id;


--
-- Name: tree_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE tree_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE tree_id_seq OWNER TO postgres;

--
-- Name: tree_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE tree_id_seq OWNED BY category.id;


--
-- Name: user; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE "user" (
    id integer NOT NULL,
    role_id integer NOT NULL,
    status smallint NOT NULL,
    email character varying(255),
    username character varying(255),
    password character varying(255),
    auth_key character varying(255),
    access_token character varying(255),
    logged_in_ip character varying(255),
    logged_in_at timestamp(0) without time zone,
    created_ip character varying(255),
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone,
    banned_at timestamp(0) without time zone,
    banned_reason character varying(255)
);


ALTER TABLE "user" OWNER TO postgres;

--
-- Name: user_auth; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE user_auth (
    id integer NOT NULL,
    user_id integer NOT NULL,
    provider character varying(255) NOT NULL,
    provider_id character varying(255) NOT NULL,
    provider_attributes text NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);


ALTER TABLE user_auth OWNER TO postgres;

--
-- Name: user_auth_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE user_auth_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE user_auth_id_seq OWNER TO postgres;

--
-- Name: user_auth_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE user_auth_id_seq OWNED BY user_auth.id;


--
-- Name: user_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE user_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE user_id_seq OWNER TO postgres;

--
-- Name: user_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE user_id_seq OWNED BY "user".id;


--
-- Name: user_token; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE user_token (
    id integer NOT NULL,
    user_id integer,
    type smallint NOT NULL,
    token character varying(255) NOT NULL,
    data character varying(255),
    created_at timestamp(0) without time zone,
    expired_at timestamp(0) without time zone
);


ALTER TABLE user_token OWNER TO postgres;

--
-- Name: user_token_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE user_token_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE user_token_id_seq OWNER TO postgres;

--
-- Name: user_token_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE user_token_id_seq OWNED BY user_token.id;


--
-- Name: callback id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY callback ALTER COLUMN id SET DEFAULT nextval('callback_id_seq'::regclass);


--
-- Name: cart id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY cart ALTER COLUMN id SET DEFAULT nextval('cat_id_seq'::regclass);


--
-- Name: cart_order id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY cart_order ALTER COLUMN id SET DEFAULT nextval('cart_order_id_seq'::regclass);


--
-- Name: category id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY category ALTER COLUMN id SET DEFAULT nextval('tree_id_seq'::regclass);


--
-- Name: page id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY page ALTER COLUMN id SET DEFAULT nextval('page_id_seq'::regclass);


--
-- Name: product id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY product ALTER COLUMN id SET DEFAULT nextval('product_id_seq'::regclass);


--
-- Name: profile id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY profile ALTER COLUMN id SET DEFAULT nextval('profile_id_seq'::regclass);


--
-- Name: role id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY role ALTER COLUMN id SET DEFAULT nextval('role_id_seq'::regclass);


--
-- Name: source_message id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY source_message ALTER COLUMN id SET DEFAULT nextval('source_message_id_seq'::regclass);


--
-- Name: user id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY "user" ALTER COLUMN id SET DEFAULT nextval('user_id_seq'::regclass);


--
-- Name: user_auth id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY user_auth ALTER COLUMN id SET DEFAULT nextval('user_auth_id_seq'::regclass);


--
-- Name: user_token id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY user_token ALTER COLUMN id SET DEFAULT nextval('user_token_id_seq'::regclass);


--
-- Data for Name: callback; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY callback (id, name, phone, time_add) FROM stdin;
1	tes	dfgdfg	2017-07-21 13:21:33.465517
2	test	test	2017-07-21 13:27:43.46914
\.


--
-- Name: callback_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('callback_id_seq', 2, true);


--
-- Data for Name: cart; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY cart (id, session_id, user_id, time_create, product_id, count, is_active, order_id) FROM stdin;
1	ad3t2ods1t3bcqh2qmu0ppdjo3	\N	2017-06-20 09:57:19.210711	1	1	t	\N
2	ad3t2ods1t3bcqh2qmu0ppdjo3	\N	2017-06-20 10:00:01.572481	4	1	t	\N
3	fjnrtb9652513ig6sbva6oqq36	1	2017-06-20 10:00:50.476291	5	1	f	1
4	fjnrtb9652513ig6sbva6oqq36	1	2017-06-22 07:55:00.34427	4	1	f	1
5	fjnrtb9652513ig6sbva6oqq36	1	2017-06-22 07:55:14.6953	5	1	f	1
6	fjnrtb9652513ig6sbva6oqq36	1	2017-06-22 07:55:23.535457	4	5	f	1
7	fjnrtb9652513ig6sbva6oqq36	1	2017-06-22 10:24:37.727474	5	1	f	1
8	fjnrtb9652513ig6sbva6oqq36	1	2017-06-22 10:25:01.712561	1	1	f	1
9	fjnrtb9652513ig6sbva6oqq36	1	2017-06-22 12:55:53.138841	1	1	f	1
10	fjnrtb9652513ig6sbva6oqq36	1	2017-06-22 13:19:15.592329	4	1	f	2
11	fjnrtb9652513ig6sbva6oqq36	1	2017-06-24 08:41:23.011692	1	1	f	3
12	fjnrtb9652513ig6sbva6oqq36	1	2017-06-24 08:41:34.610703	1	1	f	3
13	fjnrtb9652513ig6sbva6oqq36	1	2017-06-24 08:55:45.602423	1	3	f	3
14	fjnrtb9652513ig6sbva6oqq36	1	2017-06-24 09:05:28.502635	5	5	f	3
15	fjnrtb9652513ig6sbva6oqq36	1	2017-06-24 09:05:38.748291	5	5	f	3
23	fjnrtb9652513ig6sbva6oqq36	1	2017-07-18 20:02:44.437598	7	1	t	\N
56	fjnrtb9652513ig6sbva6oqq36	1	2017-07-21 13:56:51.266525	6	1	t	\N
\.


--
-- Data for Name: cart_order; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY cart_order (id, user_id, user_name, user_email, user_phone, delivery_address, delivery_type, payment_type, comment, time_create) FROM stdin;
1	1	the one	neo@neo.com	0665544186	нет	1	2	теые	2017-06-22 13:18:41.09445
2	1	the one	neo@neo.com	еееуеуе	ыва	3	1	ывва	2017-06-22 13:19:39.621466
3	1	the one	neo@neo.com	+380665544186	test	2	1	ttt	2017-06-26 20:17:49.271832
\.


--
-- Name: cart_order_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('cart_order_id_seq', 3, true);


--
-- Name: cat_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('cat_id_seq', 56, true);


--
-- Data for Name: category; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY category (id, root, lft, rgt, lvl, name, icon, icon_type, active, selected, disabled, readonly, visible, collapsed, movable_u, movable_d, movable_l, movable_r, removable, removable_all, alias) FROM stdin;
22	1	3	4	2	Свадебный салют		1	t	f	f	f	t	f	t	t	t	t	t	f	wedding
24	1	7	8	2	Новогодний фейерверк		1	t	f	f	f	t	f	t	t	t	t	t	f	newyear
23	1	5	6	2	Фейерверк на день рождение		1	t	f	f	f	t	f	t	t	t	t	t	f	birthday
25	1	9	10	2	Салют на выпускной		1	t	f	f	f	t	f	t	t	t	t	t	f	highschoolgraduation
2	1	12	25	1	Салютные установки		1	t	f	f	f	t	f	t	t	t	t	t	f	saluts
3	1	13	20	2	Розводки		1	t	f	f	f	t	f	t	t	t	t	t	f	razvodki
21	1	2	11	1	Праздничные салюты	folder	1	t	f	f	f	t	f	t	t	t	t	t	f	celebration
4	1	21	22	2	Малые фейерверки		1	t	f	f	f	t	f	t	t	t	t	t	f	small
1	1	1	50	0	Категории		1	t	f	f	f	t	f	t	t	t	t	t	f	category
5	1	23	24	2	Большие фейерверки		1	t	f	f	f	t	f	t	t	t	t	t	f	big
8	1	30	31	1	Римськие свечи		1	t	f	f	f	t	f	t	t	t	t	t	f	romancandles
9	1	32	33	1	Конфетти		1	t	f	f	f	t	f	t	t	t	t	t	f	confetti
10	1	34	35	1	Петарды		1	t	f	f	f	t	f	t	t	t	t	t	f	petards
12	1	37	38	2	2,5 дюйма		1	t	f	f	f	t	f	t	t	t	t	t	f	2_5inches
13	1	39	40	2	3 дюйма		1	t	f	f	f	t	f	t	t	t	t	t	f	3inches
14	1	41	42	2	4 дюйма		1	t	f	f	f	t	f	t	t	t	t	t	f	4inches
15	1	43	44	2	5 дюймов		1	t	f	f	f	t	f	t	t	t	t	t	f	5inches
11	1	36	47	1	Профессиональная пиротехника		1	t	f	f	f	t	f	t	t	t	t	t	f	professional
16	1	45	46	2	6 дюймов		1	t	f	f	f	t	f	t	t	t	t	t	f	6inches
17	1	48	49	1	Сценическая пиротехника		1	t	f	f	f	t	f	t	t	t	t	t	f	stage
20	1	18	19	3	test		1	t	f	f	f	t	f	t	t	t	t	t	f	test
6	1	26	27	1	Ракеты		1	t	f	f	f	t	f	t	t	t	t	t	f	rockets
7	1	28	29	1	Фонтаны		1	t	f	f	f	t	f	t	t	t	t	t	f	fontans
\.


--
-- Data for Name: ceo; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY ceo (route_name, route_parameters, name, ceo_text, title, meta_keywords, meta_description) FROM stdin;
category/index	{"alias": "saluts"}	Салютные установки	Салютные установки	Салютные установки	Салютные установки	Салютные установки
category/index	{"lang": "ru", "alias": "saluts/razvodki"}	Разводки	Разводки	Разводки	Разводки	Разводки
site/index	{"lang": "ru"}	Главная страница	Это сео текст	Главная страница	Главная страница	Главная страница
site/index	{"lang": "ua"}	Головна сторiнка	Это сео текст	Головна сторiнка	Главная страница	Главная страница
\.


--
-- Data for Name: characteristics; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY characteristics (key, name, icon, unit) FROM stdin;
1	Разлет пироэлементов в небе	\N	\N
5	Количество выстрелов	\N	\N
6	Торговая марка	\N	\N
2	Время работы	\N	с
3	Калибр	\N	мм
4	Высота полета пироэлементов	\N	м
7	Безопасное расстояние	\N	м
\.


--
-- Data for Name: message; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY message (id, language, translation) FROM stdin;
1	ua	Привiт
\.


--
-- Data for Name: migration; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY migration (version, apply_time) FROM stdin;
m000000_000000_base	1494753595
m150214_044831_init_user	1494753598
m230416_200116_tree	1494757252
m150207_210500_i18n_init	1500299813
\.


--
-- Data for Name: page; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY page (id, name, alias, shot_text, text, is_active, preview_image) FROM stdin;
1	test	test	sshot	tttexxxt	t	\N
2	Контакты	contacts		<p>Tут будут контакты&nbsp;</p>\r\n	t	
3	Доставка и оплата	shippingandpayment		<p>Тут будет условия доставки и оплаты =</p>\r\n	t	
4	О компании	aboutcompany		<p>Тут будет текст о компании&nbsp;</p>\r\n	t	
\.


--
-- Name: page_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('page_id_seq', 4, true);


--
-- Data for Name: product; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY product (name, alias, is_available, created_at, update_at, description, characteristics, images, fk_category_id, id, price, old_price, is_top, youtube_url) FROM stdin;
test	tes	t	\N	\N	[p	\N	\N	4	1	180.0	300.0	t	\N
rw	rw	t	\N	\N	\N	\N	\N	4	2	\N	\N	t	\N
tesss	dfgdfg	t	2017-05-21 14:10:19.741159	\N	hjkhjk	{}	{}	7	3	\N	\N	t	\N
testtt11	testtt11	t	2017-06-17 10:17:42.649034	\N	testtt	{}	["product_img594501c6939fa.png"]	6	6	500.0	\N	f	\N
tesss3	rrrrr	t	2017-06-07 20:41:39.525405	\N	ddds	{}	["product_img593865037bf92.png"]	2	5	43.0	65.0	f	\N
test	test	t	2017-05-24 22:10:38.316361	\N	fgfh	{"1": "до 20 м", "2": "60 с"}	["product_img5925daae4ce38.jpg"]	3	4	500.0	\N	f	\N
Фейерверк "Будем" Салютная установка 05-25	budem05_25	t	2017-07-18 19:22:41.952179	\N	Салютная монтаж " Будем" наступает результатом златотканой короны с лазуревыми и красноватыми светом , кроме того златотканой короны с розово-пурпурными и зеленоватыми светом и златотканой короны с лазуревыми и золотистыми светом , а в окончание салюта публика сумеют разглядеть привлекательный итог с п " 5 зарядов в 1 залпе в варианте живописной георгины с златотканой короной. Далее у Вам имеется вероятность ознакомиться все без исключения ранее изображенные результаты салютной конструкции " Будем" в воздействии в видеоматериал.	{"1": "30", "2": "46", "3": "30", "4": "35", "5": "25", "6": "", "7": ""}	["product_img596e6001df3f1.jpg"]	22	7	740.0	800.0	f	https://www.youtube.com/embed/dBvP01itQ4s
Праздничный феєрверк "Святкова" Салютна установка 201-48	svatkova201_48	t	2017-07-18 20:28:17.754469	\N		{"1": "", "2": "43", "3": "30", "4": "40", "5": "48", "6": "", "7": ""}	["product_img596e6f61b75c6.jpg"]	23	8	1400.0	\N	f	
Феєрверк "Новорічна ніч" Салютна установка СУ 132-12	newyear132_12	t	2017-07-18 20:46:52.827722	\N		{"1": "", "2": "30", "3": "25", "4": "30", "5": "12", "6": "", "7": "30"}	["product_img596e73bcc2374.jpg"]	24	9	\N	\N	f	
\.


--
-- Name: product_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('product_id_seq', 39, true);


--
-- Data for Name: profile; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY profile (id, user_id, created_at, updated_at, full_name, timezone, phone) FROM stdin;
1	1	2017-05-14 09:19:58	\N	the one	\N	\N
\.


--
-- Name: profile_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('profile_id_seq', 1, true);


--
-- Data for Name: role; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY role (id, name, created_at, updated_at, can_admin) FROM stdin;
1	Admin	2017-05-14 09:19:58	\N	1
2	User	2017-05-14 09:19:58	\N	0
\.


--
-- Name: role_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('role_id_seq', 2, true);


--
-- Data for Name: source_message; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY source_message (id, category, message) FROM stdin;
1	app	Привет
\.


--
-- Name: source_message_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('source_message_id_seq', 33, true);


--
-- Name: tree_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('tree_id_seq', 25, true);


--
-- Data for Name: user; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY "user" (id, role_id, status, email, username, password, auth_key, access_token, logged_in_ip, logged_in_at, created_ip, created_at, updated_at, banned_at, banned_reason) FROM stdin;
1	1	1	neo@neo.com	neo	$2y$13$dyVw4WkZGkABf2UrGWrhHO4ZmVBv.K4puhOL59Y9jQhIdj63TlV.O	xag9W0UVcl4CEyTFuxhfWTvTxGlbtkhm	jnlfAF8F_PVrYjQZJlvKz3ZYWKK7S5_0	127.0.0.1	2017-06-20 10:00:37	\N	2017-05-14 09:19:58	\N	\N	\N
\.


--
-- Data for Name: user_auth; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY user_auth (id, user_id, provider, provider_id, provider_attributes, created_at, updated_at) FROM stdin;
\.


--
-- Name: user_auth_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('user_auth_id_seq', 1, false);


--
-- Name: user_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('user_id_seq', 1, true);


--
-- Data for Name: user_token; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY user_token (id, user_id, type, token, data, created_at, expired_at) FROM stdin;
\.


--
-- Name: user_token_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('user_token_id_seq', 1, false);


--
-- Name: callback callback_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY callback
    ADD CONSTRAINT callback_pkey PRIMARY KEY (id);


--
-- Name: cart_order cart_order_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY cart_order
    ADD CONSTRAINT cart_order_pkey PRIMARY KEY (id);


--
-- Name: cart cat_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY cart
    ADD CONSTRAINT cat_pkey PRIMARY KEY (id);


--
-- Name: ceo ceo_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY ceo
    ADD CONSTRAINT ceo_pkey PRIMARY KEY (route_name, route_parameters);


--
-- Name: characteristics characteristics_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY characteristics
    ADD CONSTRAINT characteristics_pkey PRIMARY KEY (key);


--
-- Name: migration migration_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY migration
    ADD CONSTRAINT migration_pkey PRIMARY KEY (version);


--
-- Name: page page_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY page
    ADD CONSTRAINT page_pkey PRIMARY KEY (id);


--
-- Name: message pk_message_id_language; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY message
    ADD CONSTRAINT pk_message_id_language PRIMARY KEY (id, language);


--
-- Name: product product_alias_key; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY product
    ADD CONSTRAINT product_alias_key UNIQUE (alias);


--
-- Name: product product_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY product
    ADD CONSTRAINT product_pkey PRIMARY KEY (id);


--
-- Name: profile profile_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY profile
    ADD CONSTRAINT profile_pkey PRIMARY KEY (id);


--
-- Name: role role_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY role
    ADD CONSTRAINT role_pkey PRIMARY KEY (id);


--
-- Name: source_message source_message_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY source_message
    ADD CONSTRAINT source_message_pkey PRIMARY KEY (id);


--
-- Name: category tree_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY category
    ADD CONSTRAINT tree_pkey PRIMARY KEY (id);


--
-- Name: user_auth user_auth_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY user_auth
    ADD CONSTRAINT user_auth_pkey PRIMARY KEY (id);


--
-- Name: user user_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY "user"
    ADD CONSTRAINT user_pkey PRIMARY KEY (id);


--
-- Name: user_token user_token_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY user_token
    ADD CONSTRAINT user_token_pkey PRIMARY KEY (id);


--
-- Name: idx_message_language; Type: INDEX; Schema: public; Owner: postgres
--

CREATE INDEX idx_message_language ON message USING btree (language);


--
-- Name: idx_source_message_category; Type: INDEX; Schema: public; Owner: postgres
--

CREATE INDEX idx_source_message_category ON source_message USING btree (category);


--
-- Name: tree_NK1; Type: INDEX; Schema: public; Owner: postgres
--

CREATE INDEX "tree_NK1" ON category USING btree (root);


--
-- Name: tree_NK2; Type: INDEX; Schema: public; Owner: postgres
--

CREATE INDEX "tree_NK2" ON category USING btree (lft);


--
-- Name: tree_NK3; Type: INDEX; Schema: public; Owner: postgres
--

CREATE INDEX "tree_NK3" ON category USING btree (rgt);


--
-- Name: tree_NK4; Type: INDEX; Schema: public; Owner: postgres
--

CREATE INDEX "tree_NK4" ON category USING btree (lvl);


--
-- Name: tree_NK5; Type: INDEX; Schema: public; Owner: postgres
--

CREATE INDEX "tree_NK5" ON category USING btree (active);


--
-- Name: user_auth_provider_id; Type: INDEX; Schema: public; Owner: postgres
--

CREATE INDEX user_auth_provider_id ON user_auth USING btree (provider_id);


--
-- Name: user_email; Type: INDEX; Schema: public; Owner: postgres
--

CREATE UNIQUE INDEX user_email ON "user" USING btree (email);


--
-- Name: user_token_token; Type: INDEX; Schema: public; Owner: postgres
--

CREATE UNIQUE INDEX user_token_token ON user_token USING btree (token);


--
-- Name: user_username; Type: INDEX; Schema: public; Owner: postgres
--

CREATE UNIQUE INDEX user_username ON "user" USING btree (username);


--
-- Name: cart cat_product_id_fkey; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY cart
    ADD CONSTRAINT cat_product_id_fkey FOREIGN KEY (product_id) REFERENCES product(id) ON UPDATE CASCADE ON DELETE CASCADE;


--
-- Name: cart cat_user_id_fkey; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY cart
    ADD CONSTRAINT cat_user_id_fkey FOREIGN KEY (user_id) REFERENCES "user"(id) ON UPDATE CASCADE ON DELETE CASCADE;


--
-- Name: message fk_message_source_message; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY message
    ADD CONSTRAINT fk_message_source_message FOREIGN KEY (id) REFERENCES source_message(id) ON UPDATE RESTRICT ON DELETE CASCADE;


--
-- Name: product product_fk_category_id_fkey; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY product
    ADD CONSTRAINT product_fk_category_id_fkey FOREIGN KEY (fk_category_id) REFERENCES category(id);


--
-- Name: profile profile_user_id; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY profile
    ADD CONSTRAINT profile_user_id FOREIGN KEY (user_id) REFERENCES "user"(id);


--
-- Name: user_auth user_auth_user_id; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY user_auth
    ADD CONSTRAINT user_auth_user_id FOREIGN KEY (user_id) REFERENCES "user"(id);


--
-- Name: user user_role_id; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY "user"
    ADD CONSTRAINT user_role_id FOREIGN KEY (role_id) REFERENCES role(id);


--
-- Name: user_token user_token_user_id; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY user_token
    ADD CONSTRAINT user_token_user_id FOREIGN KEY (user_id) REFERENCES "user"(id);


--
-- PostgreSQL database dump complete
--

